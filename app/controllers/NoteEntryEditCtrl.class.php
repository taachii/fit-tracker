<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\NoteEntryEditForm;

class NoteEntryEditCtrl {

  private $form;
  private $validator;

  public function __construct() {
    $this->form = new NoteEntryEditForm;
    $this->validator = new Validator();
  }

  private function validateEdit() {
    $this->form->idTrainingNote = ParamUtils::getFromCleanURL(1, true, "Błędne wywołanie aplikacji!");

    $this->form->idNoteEntry = ParamUtils::getFromCleanURL(2, true, "Błędne wywołanie aplikacji!");
    return !App::getMessages()->isError();
  }

  private function validateSave() {
    $this->form->idTrainingNote = ParamUtils::getFromRequest("idTrainingNote", true, "Błędne wywołanie aplikacji!");

    $this->form->idNoteEntry = ParamUtils::getFromRequest("idNoteEntry", true, "Błędne wywołanie aplikacji!");

    $this->form->exerciseName = $this->validator->validateFromRequest("exerciseName", [
      'trim' => true,
      'required' => true,
      'required_message' => "Nie podano nazwy ćwiczenia!",
      'min_length' => 2,
      'max_length' => 45,
      'validator_message' => "Nazwa ćwiczenia powinnna zawierać 2 - 45 znaków!"
    ]);

    $this->form->sets = $this->validator->validateFromRequest("sets", [
      'int'=> true,
      'min' => 1,
      'required' => true,
      'required_message' => "Nie podano liczby serii!",
      'validator_message' => "Liczba serii musi być liczbą całkowitą >= 1!"
    ]);

    $this->form->reps = $this->validator->validateFromRequest("reps", [
      'int'=> true,
      'min' => 1,
      'required' => true,
      'required_message' => "Nie podano liczby powtórzeń!",
      'validator_message' => "Liczba powtórzeń musi być liczbą całkowitą >= 1!"
    ]);

    $this->form->weight = $this->validator->validateFromRequest("weight", [
      'float' => true,
      'min' => 0,
      'required' => true,
      'required_message' => "Nie podano obciążenia!",
      'validator_message' => "Obciążenie musi być >= 0!"
    ]);

    $this->form->idType = $this->validator->validateFromRequest("idType", [
      'required' => true,
      'required_message' => "Nie podano typu ćwiczenia!"
    ]);

    return !App::getMessages()->isError();
  }

  private function generateView() {
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('cancelAction', "view_noteList");
    App::getSmarty()->display('noteEntryEdit_view.tpl');
  }

  public function action_view_noteEntryEdit() {
    if($this->validateEdit()) {
      try {
        $record = App::getDB()->get("noteentry", [
          "[>]exercise" => ["noteentry.idExercise" => "idExercise"],
          "[>]type" => ["exercise.idType" => "idType"]
        ], [
          "noteentry.idTrainingNote",
          "noteentry.idNoteEntry",
          "noteentry.sets",
          "noteentry.reps",
          "noteentry.weight",
          "exercise.idExercise",
          "exercise.exerciseName",
          "type.idType",
          "type.typeName"
        ], [
          "idNoteEntry" => $this->form->idNoteEntry
        ]);

        $this->form->idTrainingNote = $record["idTrainingNote"];
        $this->form->idNoteEntry = $record["idNoteEntry"];
        $this->form->idExercise = $record["idExercise"];
        $this->form->exerciseName = $record["exerciseName"];
        $this->form->sets = $record["sets"];
        $this->form->reps = $record["reps"];
        $this->form->weight = $record["weight"];
        $this->form->idType = $record["idType"];

      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas odczytu rekordu!");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
    }
    $this->generateView();
  }

  public function action_noteEntrySave() {
    if($this->validateSave()) {
      try {
        $exercise = App::getDB()->get("exercise", "*", [
          "exerciseName" => $this->form->exerciseName
        ]);

        $exerciseID = NULL;

        if(!$exercise) {  // Wstawienie do bazy ćwiczenia, jeśli go w niej nie ma
          App::getDB()->insert("exercise", [
            "exerciseName" => $this->form->exerciseName,
            "idType" => $this->form->idType
          ]);
          
          // Pobranie ID świeżo utworzonego ćwiczenia
          $newExercise = App::getDB()->get("exercise", "*", [
            "exerciseName" => $this->form->exerciseName
          ]);

          $exerciseID = $newExercise["idExercise"];
        } else { // Jeśli ćwiczenie istnieje w bazie -> pobierz jego ID
          $exerciseID = $exercise["idExercise"];
        }

        if($this->form->idNoteEntry == '') {
          App::getDB()->insert("noteentry", [
            "idExercise" => $exerciseID,
            "sets" => $this->form->sets,
            "reps" => $this->form->reps,
            "weight" => $this->form->weight,
            "idTrainingNote" => $this->form->idTrainingNote
          ]);
        } else {
          App::getDB()->update("noteentry", [
            "idExercise" => $exerciseID,
            "sets" => $this->form->sets,
            "reps" => $this->form->reps,
            "weight" => $this->form->weight
          ], [
            "idNoteEntry" => $this->form->idNoteEntry
          ]);
        }
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił nieoczekiwany błąd podczas zapisu rekordu.");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
      $noteID = $this->form->idTrainingNote;
      Utils::debugToConsole($noteID);
      App::getRouter()->redirectTo("view_noteEntryList/$noteID");
    } else {
      $this->generateView();
    }
  }

  public function action_noteEntryAdd() {
    $this->form->idTrainingNote = ParamUtils::getFromCleanURL(1, true, "Błędne wywołanie aplikacji!");
    $this->generateView();
  }

  public function action_noteEntryDelete() {
    if($this->validateEdit()) {
      try {
        App::getDB()->query("SET foreign_key_checks = 0");
        App::getDB()->delete("noteentry", [
          "idNoteEntry" => $this->form->idNoteEntry
        ]);
        App::getDB()->query("SET foreign_key_checks = 1");
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas usuwania rekordu.");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      } 
    }
    $noteID = $this->form->idTrainingNote; 
    App::getRouter()->redirectTo("view_noteEntryList/$noteID");
  }
}
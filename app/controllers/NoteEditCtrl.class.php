<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\NoteEditForm;

class NoteEditCtrl {

  private $form;
  private $validator;

  public function __construct() {
    $this->form = new NoteEditForm;
    $this->validator = new Validator();
  }

  private function validateEdit() {
    $this->form->idTrainingNote = ParamUtils::getFromCleanURL(1, true, "Błędne wywołanie aplikacji!");
    return !App::getMessages()->isError();
  }

  private function validateSave() {
    $this->form->idTrainingNote = ParamUtils::getFromRequest("idTrainingNote", true, "Błędne wywołanie aplikacji!");

    $this->form->noteTitle = $this->validator->validateFromRequest("noteTitle", [
      'trim' => true,
      'required' => true,
      'required_message' => "Nie podano tytułu notatki!",
      'min_length' => 1,
      'max_length' => 45,
      'validator_message' => "Tytuł notatki powinien zawierać 1 - 45 znaków!"
    ]);

    return !App::getMessages()->isError();
  }

  private function generateView() {
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('cancelAction', "view_noteList");
    App::getSmarty()->display('noteEdit_view.tpl');
  }

  public function action_view_noteEdit() {
    if($this->validateEdit()) {
      try {
        $record = App::getDB()->get("trainingnote", [
          "idTrainingNote",
          "noteTitle",
          "creationDate"
        ], [
          "idTrainingNote" => $this->form->idTrainingNote
        ]);

        $this->form->idTrainingNote = $record["idTrainingNote"];
        $this->form->noteTitle = $record["noteTitle"];

      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas odczytu rekordu!");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
    }
    $this->generateView();
  }

  public function action_noteSave() {
    if($this->validateSave()) {
      try {
        if($this->form->idTrainingNote == '') {
          $loggedUserId = $_SESSION['user']['idUser'];
          App::getDB()->insert("trainingnote", [
            "noteTitle" => $this->form->noteTitle,
            "idUser" => $loggedUserId
          ]);
        } else {
          App::getDB()->update("trainingnote" , [
            "noteTitle" => $this->form->noteTitle
          ], [
            "idTrainingNote" => $this->form->idTrainingNote
          ]);
        }
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił nieoczekiwany błąd podczas zapisu rekordu.");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
      $newNote = App::getDB()->get("trainingnote", [
        "idTrainingNote"
      ], [
        "noteTitle" => $this->form->noteTitle
      ]);
      $noteID = $newNote['idTrainingNote'];
      App::getRouter()->redirectTo("view_noteEntryList/$noteID");
    } else {
      $this->generateView();
    }
  }

  public function action_noteAdd() {
    $this->generateView();
  }

  public function action_noteDelete() {
    if($this->validateEdit()) {
      try {
        App::getDB()->query("SET foreign_key_checks = 0");
        App::getDB()->delete("trainingnote", [
          "idTrainingNote" => $this->form->idTrainingNote
        ]);
        App::getDB()->query("SET foreign_key_checks = 1");
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas usuwania rekordu.");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
    }
    App::getRouter()->redirectTo('view_noteList');
  }
}
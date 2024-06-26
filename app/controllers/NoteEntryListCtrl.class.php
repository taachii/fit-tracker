<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\RoleUtils;

class NoteEntryListCtrl {

  private $entries;
  private $validator;
  private $noteID;

  public function __construct() {
    $this->validator = new Validator();
    $this->noteID = $this->validator->validateFromCleanURL(1, [
      "required" => true,
      "required_message" => "Błędne wywołanie aplikacji!"
    ]);
  }

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('cancelAction', "view_noteList");
    App::getSmarty()->assign('entries', $this->entries);
    App::getSmarty()->assign('noteID', $this->noteID);
    App::getSmarty()->display('noteEntryList_view.tpl');
  }

  public function action_view_noteEntryList() {
    try {
      $this->entries = App::getDB()->select("noteentry", [
        "[>]exercise" => ["noteentry.idExercise" => "idExercise"],
        "[>]type" => ["exercise.idType" => "idType"]
      ], [
        "noteentry.idTrainingNote",
        "noteentry.idNoteEntry",
        "noteentry.sets",
        "noteentry.reps",
        "noteentry.weight",
        "exercise.exerciseName",
        "type.typeName"
      ], [
        "idTrainingNote" => $this->noteID
      ]);
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd podczas pobierania rekordów!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    $this->generateView();
  }
}
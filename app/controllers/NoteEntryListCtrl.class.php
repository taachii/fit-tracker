<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\RoleUtils;

class NoteEntryListCtrl {

  private $entries;
  private $validator;
  private $noteId;

  public function __construct() {
    $this->validator = new Validator();
    $this->noteId = $this->validator->validateFromCleanURL(1, [
      "required" => true,
      "required_message" => "Błędne wywołanie aplikacji!"
    ]);
  }

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('isAdmin', RoleUtils::inRole('admin'));
    App::getSmarty()->assign('cancelAction', "view_noteList");
    App::getSmarty()->assign('entries', $this->entries);
    App::getSmarty()->display('noteEntryList_view.tpl');
    Utils::debugToConsole($this->noteId);
  }

  public function action_view_noteEntryList() {
    try {
      $this->entries = App::getDB()->select("noteentry", [
        "[>]exercise" => ["noteentry.idExercise" => "idExercise"],
        "[>]type" => ["exercise.idType" => "idType"]
      ], [
        "noteentry.idNoteEntry",
        "noteentry.sets",
        "noteentry.reps",
        "exercise.exerciseName",
        "type.typeName"
      ], [
        "idTrainingNote" => $this->noteId
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
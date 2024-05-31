<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;

class NoteListCtrl {

  private $notes;

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('isAdmin', RoleUtils::inRole('admin'));
    App::getSmarty()->assign('notes', $this->notes);
    App::getSmarty()->display('noteList_view.tpl');
  }

  public function action_view_noteList() {
    $loggedUserId = $_SESSION['user']['idUser'];

    try {
      $this->notes = App::getDB()->select("trainingnote", [
        "idTrainingNote",
        "noteTitle",
        "creationDate"
      ], [
        "idUser" => $loggedUserId
      ]);

      foreach($this->notes as &$n) {
        $n['entries'] = App::getDB()->select("noteentry", [
          "[>]exercise" => ["noteentry.idExercise" => "idExercise"],
          "[>]type" => ["exercise.idType" => "idType"]
        ], [
          "noteentry.sets",
          "noteentry.reps",
          "exercise.exerciseName",
          "type.typeName"
        ], [
          "idTrainingNote" => $n["idTrainingNote"]
        ]);
      }
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd podczas pobierania rekordów!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    $this->generateView();
  }
}
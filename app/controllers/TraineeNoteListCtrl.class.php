<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class TraineeNoteListCtrl {

  private $notes;
  private $traineeUsername;

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('notes', $this->notes);
    App::getSmarty()->assign('traineeUsername', $this->traineeUsername);
    App::getSmarty()->display('traineeNoteList_view.tpl');
  }

  private function convertSeconds($seconds) {
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $remainingSeconds = $seconds % 60;

    return [
      'hours' => $hours,
      'minutes' => $minutes,
      'seconds' => $remainingSeconds
    ];
  }

  public function action_view_traineeNoteList() {
    $traineeId = ParamUtils::getFromCleanURL(1);

    try {
      $user = App::getDB()->get("user", [
        "username"
      ], [
        "idUser" => $traineeId
      ]);

      $this->traineeUsername = $user["username"];

      $this->notes = App::getDB()->select("trainingnote", [
        "idTrainingNote",
        "noteTitle",
        "creationDate"
      ], [
        "idUser" => $traineeId,
        "ORDER" =>  [
          "creationDate" => "DESC"
        ]
      ]);

      foreach($this->notes as &$n) {
        $n['entries'] = App::getDB()->select("noteentry", [
          "[>]exercise" => ["noteentry.idExercise" => "idExercise"],
          "[>]type" => ["exercise.idType" => "idType"]
        ], [
          "noteentry.sets",
          "noteentry.reps",
          "noteentry.weight",
          "exercise.exerciseName",
          "type.typeName",
          "type.idType"
        ], [
          "idTrainingNote" => $n["idTrainingNote"],
        ]);

        foreach($n['entries'] as &$e) {
          if($e['idType'] == 1 || $e['idType'] == 3) {
            $seconds = $e['reps'];
            $e['reps'] = $this->convertSeconds($seconds);
          }
        }
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
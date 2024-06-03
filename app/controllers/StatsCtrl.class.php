<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class StatsCtrl {

  private $statsIsometric;
  private $statsIzotonic;
  private $statsAerobic;

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('statsIsometric', $this->statsIsometric);
    App::getSmarty()->assign('statsIsotonic', $this->statsIsotonic);
    App::getSmarty()->assign('statsAerobic', $this->statsAerobic);
    App::getSmarty()->display('stats_view.tpl');
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

  private function fetchStats($type) {
    $loggedUserId = $_SESSION['user']['idUser'];
    $stats = NULL;
    try {
      $stats = App::getDB()->query("
        SELECT 
            exercise.exerciseName,
            SUM(noteentry.sets) AS total_sets,
            SUM(noteentry.reps) AS total_reps,
            MAX(noteentry.reps) AS max_reps,
            MAX(noteentry.weight) AS max_weight,
            type.idType
        FROM 
            trainingnote
        JOIN 
            noteentry ON trainingnote.idTrainingNote = noteentry.idTrainingNote
        JOIN 
            exercise ON noteentry.idExercise = exercise.idExercise
        JOIN 
            type ON exercise.idType = type.idType
        WHERE 
            trainingnote.idUser = $loggedUserId AND
            type.typeName = '$type'
        GROUP BY 
            exercise.exerciseName
      ")->fetchAll();

      // Konwersja sekund
      foreach($stats as &$s) {
        if($s['idType'] == 1 || $s['idType'] == 3) {
          $total_seconds = $s['total_reps'];
          $s['total_reps'] = $this->convertSeconds($total_seconds);

          $max_seconds = $s['max_reps'];
          $s['max_reps'] = $this->convertSeconds($max_seconds);
        }
      }
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd podczas pobierania rekordów!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    return $stats;
  }
  public function action_view_stats() {
    $this->statsIsometric = $this->fetchStats('izometryczne');
    $this->statsIsotonic = $this->fetchStats('izotoniczne');
    $this->statsAerobic = $this->fetchStats('aerobowe');
    $this->generateView();
  } 
}

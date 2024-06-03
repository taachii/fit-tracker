<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class MentorshipCtrl {

  private $requests;
  
  private function deleteRequest($idRequest) {
    try {
      App::getDB()->delete("request", [
        "idRequest" => $idRequest
      ]);
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd podczas zapisu rekordu!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
  }
    
  public function action_requestAccept() {
    $loggedUserId = $_SESSION['user']['idUser']; // pobranie id trenera
    $idRequest = ParamUtils::getFromCleanURL(1);
    $idTrainee = ParamUtils::getFromCleanURL(2);

    $this->deleteRequest($idRequest);

    try {
      App::getDB()->insert("mentorship", [
        "idTrainer" => $loggedUserId,
        "idTrainee" => $idTrainee
      ]);
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd podczas zapisu rekordu!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    App::getRouter()->redirectTo("view_requestList");
  }
  
  public function action_requestDeny() {
    $idRequest = ParamUtils::getFromCleanURL(1);
    $this->deleteRequest();
    App::getRouter()->redirectTo("view_requestList");
  }

  public function action_mentorshipEndTrainer() {
    $idTrainee = ParamUtils::getFromCleanURL(1);
    $currentTimestamp = date("Y-m-d H:i:s", time());
    try {
      App::getDB()->update("mentorship", [
        "endDate" => $currentTimestamp
      ], [
        "idTrainee" => $idTrainee,
        "endDate" => NULL
      ]);
    }catch(\PDOException $e) {
      Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
      if (App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    App::getRouter()->redirectTo("view_traineeList");
  }

  public function action_mentorshipEndTrainee() {
    $idTrainer = ParamUtils::getFromCleanURL(1);
    $currentTimestamp = date("Y-m-d H:i:s", time());
    $loggedUserId = $_SESSION['user']['idUser'];
    try {
      App::getDB()->update("mentorship", [
        "endDate" => $currentTimestamp
      ], [
        "idTrainer" => $idTrainer,
        "idTrainee" => $loggedUserId,
        "endDate" => NULL
      ]);
    }catch(\PDOException $e) {
      Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
      if (App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    App::getRouter()->redirectTo("view_myTrainer");
  }
}



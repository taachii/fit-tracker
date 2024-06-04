<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class RequestSendCtrl {

  private $idRecipient;
  private $loggedUserId;

  public function __construct() {
    $this->loggedUserId = $_SESSION['user']['idUser']; // pobranie id uzytkownika
  }

  private function validateSend() {
    $this->idRecipient = ParamUtils::getFromCleanURL(1, true, "Brak id odbiorcy!");
    $request = NULL;
    $mentorship = NULL;
    try {
      $request = App::getDB()->get("request", "*", [
        "idSender" => $this->loggedUserId,
        "idRecipient" => $this->idRecipient
      ]);

      $mentorship = App::getDB()->get("mentorship", "*", [
        "idTrainer" => $this->idRecipient,
        "idTrainee" => $this->loggedUserId,
        "endDate" => NULL
      ]);
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd podczas odczytu rekordu!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }

    if($request) {
      Utils::addErrorMessage("Nie możesz wysłać kolejnej prośby!");
    }

    if($mentorship) {
      Utils::addErrorMessage("Posiadasz już trenera!");
    }
    
    return !App::getMessages()->isError();
  }

  public function action_requestSend() {
    if($this->validateSend()) {
      try {
        App::getDB()->insert("request", [
          "idSender" => $this->loggedUserId,
          "idRecipient" => $this->idRecipient,
        ]);
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas zapisu rekordu!");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
      App::getRouter()->forwardTo('view_trainerList');
    } else {
      App::getRouter()->forwardTo('view_trainerList');

    }
  }
}
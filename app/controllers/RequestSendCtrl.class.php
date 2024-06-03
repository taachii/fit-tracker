<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;

class RequestSendCtrl {

  public function action_requestSend() {
    $loggedUserId = $_SESSION['user']['idUser']; // pobranie id uzytkownika
    $idRecipient = ParamUtils::getFromCleanURL(1);
    try {
      App::getDB()->insert("request", [
        "idSender" => $loggedUserId,
        "idRecipient" => $idRecipient,
      ]);
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd podczas zapisu rekordu!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    App::getRouter()->redirectTo('view_trainerList');
  }
}
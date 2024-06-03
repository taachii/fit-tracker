<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class RequestListCtrl {

  private $requests;

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('requests', $this->requests);
    App::getSmarty()->display('requestList_view.tpl');
  }

  public function action_view_requestList() {
    $loggedUserId = $_SESSION['user']['idUser'];
    try {
      $this->requests = App::getDB()->select("request", [
        "[>]user" => ["idSender" => "idUser"]
      ], [
        "user.idUser",
        "user.username",
        "user.email",
        "request.sendDate",
        "request.idRequest"
      ], [
        "request.idRecipient" => $loggedUserId,
        "ORDER" => [
          "request.sendDate" => "DESC"
        ]
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

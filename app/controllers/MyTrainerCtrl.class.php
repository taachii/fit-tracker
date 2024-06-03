<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;

class MyTrainerCtrl {

  private $trainer;

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('trainer', $this->trainer);
    App::getSmarty()->display('myTrainer_view.tpl');
  }

  public function action_view_myTrainer() {
    $loggedUserId = $_SESSION["user"]["idUser"];
    try {
      $this->trainer = App::getDB()->get("user", [
        "[>]mentorship" => ["idUser" => "idTrainer"]
      ], [
        "user.idUser",
        "user.username",
        "user.email",
        "mentorship.startDate"
      ], [
        "mentorship.idTrainee" => $loggedUserId,
        "mentorship.endDate" => NULL
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
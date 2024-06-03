<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\TraineeSearchForm;

class TraineeListCtrl {

  private $form;
  private $trainees;

  public function __construct() {
    $this->form = new TraineeSearchForm();
  }

  private function validate() {
    $this->form->searchValue = ParamUtils::getFromRequest('search_value');

    // Brak potrzeby walidacji, ponieważ filtrowanie się odbywa po nazwie użytkownika

    return !App::getMessages()->isError();
  }

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('trainees', $this->trainees);
    App::getSmarty()->display('traineeList_view.tpl');
  }

  public function action_view_traineeList() {
    if($this->validate()) {
      $loggedUserId = $_SESSION['user']['idUser'];
      try {
        $this->trainees = App::getDB()->select("user", [
          "[>]mentorship" => ["idUser" => "idTrainee"]
        ], [
          "user.idUser",
          "user.username",
          "user.email",
          "mentorship.startDate"
        ], [
          "user.username[~]" => $this->form->searchValue.'%',
          "mentorship.idTrainer" => $loggedUserId,
          "mentorship.endDate" => NULL,
          "user.isActive" => 1,
          "ORDER" => [
            "mentorship.startDate" => "DESC"
          ]
        ]);
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas pobierania rekordów!");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
    }
    $this->generateView();
  }
}

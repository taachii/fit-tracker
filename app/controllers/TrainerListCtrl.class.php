<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\TrainerSearchForm;

class TrainerListCtrl {

  private $form;
  private $trainers;

  public function __construct() {
    $this->form = new TrainerSearchForm();
  }

  private function validate() {
    $this->form->searchValue = ParamUtils::getFromRequest('searchValue');
    return !App::getMessages()->isError();
  }

  private function prepareViewVariables() {
    $loggedUserId = $_SESSION['user']['idUser'];

    // Sprawdzenie, czy uzytkownik nie wyslal juz requesta
    $request = App::getDB()->get("request", "*", [
      "idSender" => $loggedUserId,
    ]);
    $_SESSION['user']['requestSent'] = $request;

    // Sprawdzenie, czy uzytkownik nie posiada trenera
    $mentorship = App::getDB()->get("mentorship", "*", [
      "idTrainee" => $loggedUserId,
      "endDate" => NULL 
    ]);
    $_SESSION['user']['hasTrainer'] = $mentorship;
  }

  private function loadData() {
    $this->validate();
    try {
      $this->trainers = App::getDB()->select("user", [
        "[>]rolelog" => ["user.idUser" => "idUser"],
        "[>]role" => ["rolelog.idRole" => "idRole"]
      ], [
        "user.idUser",
        "user.username",
        "user.email",
        "role.roleName",
      ], [
        "user.username[~]" => $this->form->searchValue.'%',
        "rolelog.removalDate" => NULL,
        "role.roleName" => "trainer",
        "user.isActive" => 1,
        "ORDER" => "registrationDate"
      ]);
    } catch(\PDOException $e) {
      Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas odczytu rekordów.');
      if (App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    $this->prepareViewVariables();
  }

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('trainers', $this->trainers);
    App::getSmarty()->display('trainerList_view.tpl');
  }

  private function generateViewPart() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('trainers', $this->trainers);
    App::getSmarty()->display('trainerListTable.tpl');
  }

  public function action_view_trainerList() {
    $this->loadData();
    $this->generateView();
  }

  public function action_trainerListPart() {
    $this->loadData();
    $this->generateViewPart();
  }
}

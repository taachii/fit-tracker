<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\UserSearchForm;

class UserListCtrl {

  private $form;
  private $records;

  public function __construct() {
    $this->form = new UserSearchForm();
  }

  private function validate() {
    $this->form->searchValue = ParamUtils::getFromRequest('search_value');

    // Brak potrzeby walidacji, ponieważ filtrowanie się odbywa po nazwie użytkownika

    return !App::getMessages()->isError();
  }

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('isAdmin', RoleUtils::inRole('admin'));
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('users', $this->records);
    App::getSmarty()->display('userList_view.tpl');
  }

  public function action_view_userList() {
    if($this->validate()) {
      try {
        $this->records = App::getDB()->select("user", [
          "[>]rolelog" => ["user.idUser" => "idUser"],
          "[>]role" => ["rolelog.idRole" => "idRole"]
        ], [
          "user.idUser",
          "user.username",
          "user.email",
          "user.registrationDate",
          "user.isActive",
          "user.deactivationDate",
          "role.roleName",
          "user.editDate",
          "user.idEditor"
        ], [
          "user.username[~]" => $this->form->searchValue.'%',
          "rolelog.removalDate" => NULL,
          "ORDER" => "registrationDate"
        ]);

        foreach($this->records as &$r) {
          $r['isActive'] = ($r['isActive'] == 1) ? "TAK" : "NIE";
        }

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

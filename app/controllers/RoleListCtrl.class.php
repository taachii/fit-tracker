<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class RoleListCtrl {

  private $records;

  private function generateView() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->assign('isAdmin', RoleUtils::inRole('admin'));
    App::getSmarty()->assign('roles', $this->records);
    App::getSmarty()->display('roleList_view.tpl');
  }

  public function action_view_roleList() {

    $where["ORDER"] = "creationDate";

    try {
      $this->records = App::getDB()->select("role", [
        "idRole",
        "roleName",
        "isActive",
        "creationDate",
        "deactivationDate"
      ], $where);

      foreach($this->records as &$r) {
        $r['isActive'] = ($r['isActive'] == 1) ? "TAK" : "NIE";
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

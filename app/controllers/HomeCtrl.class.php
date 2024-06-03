<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;

class HomeCtrl {
  public function action_view_home() {
    App::getSmarty()->assign('user', $_SESSION['user']);
    App::getSmarty()->display('home_view.tpl');
  }

  public function action_view_error403() {
    App::getSmarty()->display('error403_view.tpl');
  }
}
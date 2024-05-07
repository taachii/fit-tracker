<?php

namespace app\controllers;

use core\App;

class HomeCtrl {
  public function action_view_home() {
    App::getSmarty()->display('home_view.tpl');
  }

  public function action_view_error403() {
    App::getSmarty()->display('error403_view.tpl');
  }
}
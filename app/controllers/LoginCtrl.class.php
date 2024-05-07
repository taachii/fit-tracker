<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\Validator;
use app\forms\LoginForm;

class LoginCtrl {

  private $form;
  private $validator;

  public function __construct() {
    $this->form = new LoginForm();
    $this->validator = new Validator();
  }

  private function validate() {
    $this->form->email = $this->validator->validateFromRequest("email", [
      'trim' => true,
      'email' => true,
      'required' => true,
      'required_message' => "Nie podano adresu e-mail!",
      'validator_message' => "Podany adres e-mail jest niepoprawny!"
    ]);

    $this->form->pass = $this->validator->validateFromRequest("pass", [
      'required' => true,
      'required_message' => "Nie podano hasła!"
    ]);
    
    // TODO: walidacja pod kątem bazy danych

    return !App::getMessages()->isError();
    
  }

  private function generateView() {
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->display('login_view.tpl');
  }

  public function action_view_login() {
    $this->generateView();
  }

  public function action_login() {
    if($this->validate()) {
      App::getRouter()->redirectTo('view_home');
    } else {
      $this->generateView();
    }
  }    

  public function action_logout() {
    session_destroy();
    App::getRouter()->redirectTo('view_login');
  }
}
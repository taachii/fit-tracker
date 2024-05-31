<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
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

    // Walidacja pod kątem formularza
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

    if(App::getMessages()->isError()) {
      return false;
    }
    
    // Walidacja pod kątem bazy danych
    try {
      $record = App::getDB()->get("user", "*", [
        "email" => $this->form->email
      ]);

      if(!$record) {
        Utils::addErrorMessage("Użytkownik o podanym adresie e-mail nie istnieje!");
        return false;
      }

      if(!$record['isActive']) {
        Utils::addErrorMessage("Twoje konto zostało dezaktywowane przez administratora.");
      }

      $hashed_pass = $record["password"];
     
      if(!password_verify($this->form->pass, $hashed_pass)) {
        Utils::addErrorMessage("Wprowadzono niepoprawne hasło!");
      }
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd odczytu lub zapisu rekordu!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
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
      $user = App::getDB()->get("user", "*", [
        "email" => $this->form->email
      ]);

      try {
        $user_id = $user["idUser"];

        $role_id = App::getDB()->get("rolelog", "idRole", [
          "idUser" => $user_id,
          "removalDate" => NULL
        ]);

        $role_name = App::getDB()->get("role", "roleName", [
          "idRole" => $role_id
        ]);

        RoleUtils::addRole($role_name);
        SessionUtils::store("user", $user);

      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd odczytu lub zapisu rekordu!");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
      $action = (RoleUtils::inRole("admin") ? 'view_userList' : 'view_noteList');
      App::getRouter()->redirectTo($action);
    } else {
      $this->generateView();
    }
  }    

  public function action_logout() {
    session_destroy();
    App::getRouter()->redirectTo('view_login');
  }
}
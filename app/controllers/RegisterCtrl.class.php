<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\RegisterForm;

class RegisterCtrl {

  private $form;
  private $validator;

  public function __construct() {
    $this->form = new RegisterForm();
    $this->validator = new Validator();
  }

  private function validate() {

    // Walidacja pod kątem formularza
    $this->form->username = $this->validator->validateFromRequest("username", [
      'trim' => true,
      'required' => true,
      'required_message' => 'Nie podano nazwy użytkownika!',
      'min_length' => 3,
      'max_length' => 50,
      'validator_message' => 'Nazwa użytkownika powinna zawierać 3 - 50 znaków!'
    ]);

    $this->form->email = $this->validator->validateFromRequest("email", [
      'trim' => true,
      'email' => true,
      'required' => true,
      'required_message' => "Nie podano adresu e-mail!",
      'validator_message' => "Podany adres e-mail jest niepoprawny!"
    ]);

    $this->form->pass = $this->validator->validateFromRequest("pass", [
      'required' => true,
      'required_message' => "Nie podano hasła!",
      'min_length' => 5,
      'validator_message' => "Hasło musi zawierać minimum 5 znaków!"
    ]);

    $this->form->pass_confirm = $this->validator->validateFromRequest("pass_confirm", [
      'required' => true,
      'required_message' => "Hasło nie zostało potwierdzone!"
    ]);
    
    if($this->form->pass !== $this->form->pass_confirm) {
      Utils::addErrorMessage("Hasło niepotwierdzone! Należy podać to samo hasło.");
    }
    
    $this->form->acctype = $this->validator->validateFromRequest("acctype", [
      'required' => true,
      'required_message' => "Nie podano rodzaju konta!"
    ]);

    if(App::getMessages()->isError()) {
      return false;
    }

    // Walidacja pod kątem bazy danych
    try {
      $record = App::getDB()->get("user", "*", [
        "username" => $this->form->username
      ]);

      if($record) {
        Utils::addErrorMessage("Istnieje już użytkownik o podanej nazwie!");
      }

      $record = App::getDB()->get("user", "*", [
        "email" => $this->form->email
      ]);

      if($record) {
        Utils::addErrorMessage("Istnieje już użytkownik z podanym adresem e-mail!");
      }
    } catch(\PDOException $e) {
      Utils::addErrorMessage("Wystąpił błąd odczytu rekordu!");
      if(App::getConf()->debug) {
        Utils::addErrorMessage($e->getMessage());
      }
    }
    return !App::getMessages()->isError();
  }

  private function generateView() {
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->display('register_view.tpl');
  }
  
  public function action_view_register() {
    $this->generateView();
  }
  
  public function action_register() {
    if($this->validate()) {
      $hashed_pass = password_hash($this->form->pass, PASSWORD_DEFAULT);
      
      try {
        // Zapis użytkownika
        App::getDB()->insert("user", [
          "username" => $this->form->username,
          "email" => $this->form->email,
          "password" => $hashed_pass,
          "isActive" => 1
        ]);

        // Ustawienie roli użytkownikowi
        $user = App::getDB()->get("user", "*", [
          "email" => $this->form->email
        ]);
  
        $user_id = $user["idUser"];

        $role_id = ($this->form->acctype == 0) ? 2 : 3;  // 2 = trainee, 3 = trainer

        App::getDB()->insert("rolelog", [
          "idUser" => $user_id,
          "idRole" => $role_id
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
}
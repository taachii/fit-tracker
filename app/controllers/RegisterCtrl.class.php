<?php

namespace app\controllers;

use core\App;
use core\Utils;
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
    $this->form->username = $this->validator->validateFromRequest("username", [
      'trim' => true,
      'required' => true,
      'required_message' => 'Nie podano nazwy użytkownika!',
      'min_length' => 5,
      'max_length' => 20,
      'validator_message' => 'Nazwa użytkownika powinna zawierać 5 - 20 znaków!'
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


    // TODO: walidacja pod kątem bazy danych

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
      //TODO: dodaj uzytkownika do bazy danych
      App::getRouter()->redirectTo('view_home');
    } else {
      $this->generateView();
    }
  }
}


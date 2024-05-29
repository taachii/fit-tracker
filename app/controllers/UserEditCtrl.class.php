<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\UserEditForm;

class UserEditCtrl {

  private $form;
  private $validator;
  private $idEditor;

  public function __construct() {
    $this->form = new UserEditForm();
    $this->validator = new Validator();
  }

  private function validateEdit() {
    $this->form->idUser = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
    return !App::getMessages()->isError();
  }

  private function validateSave() {
    $this->form->idUser = $this->validator->validateFromRequest("idUser", [
      'trim' => true,
      'required' => true,
      'required_message' => "Błędne wywołanie aplikacji!"
    ]);

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

    $this->form->idRole = $this->validator->validateFromRequest("idRole", [
      'required' => true,
      'required_message' => "Nie podane roli!"
    ]);

    return !App::getMessages()->isError();
  }

  private function generateView() {
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->display('userEdit_view.tpl');
  }

  public function action_view_userEdit() {
    if($this->validateEdit()) {
      try {
        $record = App::getDB()->get("user", [
          "[>]rolelog" => ["user.idUser" => "idUser"],
          "[>]role" => ["rolelog.idRole" => "idRole"]
        ], [
          "user.idUser",
          "user.username",
          "user.email",
          "role.idRole",
          "role.roleName"
        ], [
          "user.idUser" => $this->form->idUser
        ]);
        
        $this->form->idUser = $record["idUser"];
        $this->form->username = $record["username"];
        $this->form->email = $record["email"];
        $this->form->idRole = $record["idRole"];
        
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas odczytu rekordu!");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
    }
    $this->generateView();
  }

  public function action_userSave() {
    if($this->validateSave()) {

      $idEditor = $_SESSION['user']['idUser'];

      try {
        App::getDB()->update("user", [
          "username" => $this->form->username,
          "email" => $this->form->email,
          "idEditor" => $idEditor
        ], [
          "idUser" => $this->form->idUser
        ]);

        $currentTimestamp = date("Y-m-d H:i:s", time());

        App::getDB()->update("rolelog", [
          "removalDate" => $currentTimestamp,
        ], [
          "idUser" => $this->form->idUser,
          "removalDate" => NULL
        ]);

        App::getDB()->insert("rolelog", [
          "idUser" => $this->form->idUser,
          "idRole" => $this->form->idRole
        ]);

      } catch(\PDOException $e) {
        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if (App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
      App::getRouter()->redirectTo('view_userList');
    } else {
      $this->generateView();
    }
  }

  private function userActiveToggle($value) {
    if($this->validateEdit()) {

      $idEditor = $_SESSION['user']['idUser'];
      try {
        App::getDB()->update("user", [
          "isActive" => $value,
          "idEditor" => $idEditor
        ], [
          "idUser" => $this->form->idUser
        ]);
        
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas usuwania rekordu.");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
    }
    App::getRouter()->redirectTo('view_userList');
  }

  public function action_userDeactivate() {
    $this->userActiveToggle(0);
  }

  public function action_userActivate() {
    $this->userActiveToggle(1);
  }


}
<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\RoleEditForm;

class RoleEditCtrl {

  private $form;
  private $validator;
  private $idEditor;

  public function __construct() {
    $this->form = new RoleEditForm();
    $this->validator = new Validator();
  }

  private function validateEdit() {
    $this->form->idRole = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
    return !App::getMessages()->isError();
  }

  private function validateSave() {

    $this->form->idRole = $this->validator->validateFromRequest("idRole", [
      'required' => true,
      'required_message' => "Błędne wywołanie aplikacji!"
    ]);

    $this->form->roleName = $this->validator->validateFromRequest("roleName", [
      'required' => true,
      'required_message' => "Nie podano nazwy roli!"
    ]);

    return !App::getMessages()->isError();
  }

  private function generateView() {
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('cancelAction', "view_roleList");
    App::getSmarty()->display('roleEdit_view.tpl');
  }

  public function action_view_roleEdit() {
    if($this->validateEdit()) {
      try {
        $record = App::getDB()->get("role", [
          "idRole",
          "roleName"
        ], [
          "idRole" => $this->form->idRole
        ]);

        $this->form->idRole = $record["idRole"];
        $this->form->roleName = $record["roleName"];
        
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas odczytu rekordu!");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
    }
    $this->generateView();
  }

  public function action_roleSave() {
    if($this->validateSave()) {
      try {
        App::getDB()->update("role", [
          "roleName" => $this->form->roleName
        ], [
          "idRole" => $this->form->idRole
        ]);
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas usuwania rekordu.");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
      App::getRouter()->redirectTo('view_roleList');
    } else {
      $this->generateView();
    }
  }

  private function roleActiveToggle($value) {
    if($this->validateEdit()) {

      try {
        App::getDB()->update("role", [
          "isActive" => $value,
        ], [
          "idRole" => $this->form->idRole
        ]);
        
      } catch(\PDOException $e) {
        Utils::addErrorMessage("Wystąpił błąd podczas usuwania rekordu.");
        if(App::getConf()->debug) {
          Utils::addErrorMessage($e->getMessage());
        }
      }
    }
    App::getRouter()->redirectTo('view_roleList');
  }

  public function action_roleDeactivate() {
    $this->roleActiveToggle(0);
  }

  public function action_roleActivate() {
    $this->roleActiveToggle(1);
  }
}
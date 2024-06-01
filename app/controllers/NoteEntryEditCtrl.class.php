<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\NoteEntryEditForm;

class NoteEntryEditCtrl {

  private $form;
  private $validator;

  public function __construct() {
    $this->form = new NoteEntryEditForm;
    $this->validator = new Validator();
  }

  private function validateEdit() {
    $this->form->idNoteEntry = ParamUtils::getFromCleanURL(1, true, "Błędne wywołanie aplikacji!");
    return !App::getMessages()->isError();
  }

  private function validateSave() {
    

    return !App::getMessages()->isError();
  }

  private function generateView() {
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('cancelAction', "view_noteList");
    App::getSmarty()->display('noteEntryEdit_view.tpl');
  }

  public function action_view_noteEntryEdit() {
    $this->generateView();
  }

  public function action_noteEntrySave() {

  }

  public function action_noteEntryAdd() {

  }

  public function action_noteEntryDelete() {

  }
  
}
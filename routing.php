<?php

use core\App;
use core\Utils;

$everyRole = ['admin', 'trainee', 'trainer'];

App::getRouter()->setDefaultRoute('logout'); # Default action
App::getRouter()->setLoginRoute('view_error403'); # Action to forward if no permissions

# Sciezki zwiazane z uwierzytelnianiem
Utils::addRoute('view_login', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('view_register', 'RegisterCtrl');
Utils::addRoute('register', 'RegisterCtrl');

# Sciezki zwiazane z glowna czescia aplikacji
Utils::addRoute('view_error403', 'HomeCtrl');
Utils::addRoute('view_home', 'HomeCtrl', $everyRole);

  # Akcje zwiazane z uzytkownikami
  Utils::addRoute('view_userList', 'UserListCtrl', ['admin']);
  Utils::addRoute('view_userEdit', 'UserEditCtrl', ['admin']);
  Utils::addRoute('userDeactivate', 'UserEditCtrl', ['admin']);
  Utils::addRoute('userActivate', 'UserEditCtrl', ['admin']);
  Utils::addRoute('userSave', 'UserEditCtrl', ['admin']);

  # Akcje zwiazane z rolami
  Utils::addRoute('view_roleList', 'RoleListCtrl', ['admin']);
  Utils::addRoute('view_roleEdit', 'RoleEditCtrl', ['admin']);
  Utils::addRoute('roleDeactivate', 'RoleEditCtrl', ['admin']);
  Utils::addRoute('roleActivate', 'RoleEditCtrl', ['admin']);
  Utils::addRoute('roleSave', 'RoleEditCtrl', ['admin']);

  # Akcje zwiazane z notatkami treningowymi
  Utils::addRoute('view_noteList', 'NoteListCtrl', $everyRole);
  Utils::addRoute('view_noteEdit', 'NoteEditCtrl', $everyRole);
  Utils::addRoute('noteAdd', 'NoteEditCtrl', $everyRole);
  Utils::addRoute('noteDelete', 'NoteEditCtrl', $everyRole);
  Utils::addRoute('noteSave', 'NoteEditCtrl', $everyRole);

    # Akcje zwiazane z wpisami do notatek
    Utils::addRoute('view_noteEntryList', 'NoteEntryListCtrl', $everyRole);
    Utils::addRoute('view_noteEntryEdit', 'NoteEntryEditCtrl', $everyRole);
    Utils::addRoute('noteEntryAdd', 'NoteEntryEditCtrl', $everyRole);
    Utils::addRoute('noteEntryDelete', 'NoteEntryEditCtrl', $everyRole);
    Utils::addRoute('noteEntrySave', 'NoteEntryEditCtrl', $everyRole);
    
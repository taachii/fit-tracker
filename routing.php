<?php

use core\App;
use core\Utils;

# TODO: ujednolicic nazwy akcji i metod

App::getRouter()->setDefaultRoute('logout'); #default action
App::getRouter()->setLoginRoute('view_error403'); #action to forward if no permissions

# Sciezki zwiazane z uwierzytelnianiem
Utils::addRoute('view_login', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('view_register', 'RegisterCtrl');
Utils::addRoute('register', 'RegisterCtrl');

# Sciezki zwiazane z glowna czescia aplikacji
Utils::addRoute('view_error403', 'HomeCtrl');
Utils::addRoute('view_home', 'HomeCtrl', ['admin', 'trainee', 'trainer']);
Utils::addRoute('view_userList', 'UserListCtrl', ['admin']);
Utils::addRoute('view_roleList', 'RoleListCtrl', ['admin']);
Utils::addRoute('view_userEdit', 'UserEditCtrl', ['admin']);
Utils::addRoute('userDeactivate', 'UserEditCtrl', ['admin']);
Utils::addRoute('userActivate', 'UserEditCtrl', ['admin']);
Utils::addRoute('userSave', 'UserEditCtrl', ['admin']);
Utils::addRoute('view_roleEdit', 'RoleEditCtrl', ['admin']);
Utils::addRoute('roleDeactivate', 'RoleEditCtrl', ['admin']);
Utils::addRoute('roleActivate', 'RoleEditCtrl', ['admin']);
Utils::addRoute('roleSave', 'RoleEditCtrl', ['admin']);
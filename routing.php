<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('view_login'); #default action
App::getRouter()->setLoginRoute('view_error403'); #action to forward if no permissions

# Sciezki zwiazane z uwierzytelnianiem
Utils::addRoute('view_login', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('view_register', 'RegisterCtrl');
Utils::addRoute('register', 'RegisterCtrl');

# Sciezki zwiazane z glowna czescia aplikacji
Utils::addRoute('view_error403', 'HomeCtrl');
Utils::addRoute('view_home', 'HomeCtrl');
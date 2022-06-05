<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('index'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('index', 'IndexCtrl');  //pierwsza wartość to wywołanie podklasy z drugiej wartości
Utils::addRoute('info', 'InfoCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('myprofile', 'MyprofileCtrl');
Utils::addRoute('register', 'RegisterCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
// tutaj mozna dodać następne utile do innych podstron
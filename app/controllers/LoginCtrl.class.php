<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\SessionUtils;


class LoginCtrl {
    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }
    
    public function validate() {
        //wyłącza warningi
        error_reporting(E_ALL ^ E_WARNING);   
        // https://stackoverflow.com/questions/1987579/remove-warning-messages-in-php
        
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        if (!isset($this->form->login))
            return false;
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (App::getMessages()->isError()){
            return false;
        }
        
        $login = $this->form->login;
        $password = $this->form->pass;
        
        //Dane z bazy, porównanie
        $record = App::getDB()->get("users","*",["USER_NAME"=>$login]);
        if ($record == NULL){Utils::addErrorMessage('Nie ma użytkownika ' . $login . ' w bazie danych');}  //przykłąd dodawania wartości php w środku stringa
        else if ($password != $record['USER_PASS']){
            Utils::addErrorMessage('Niepoprawne hasło');
        }
        
        // DODANIE ROLI W ZALEŻNOŚCI OD ROLI W DB
        if ($record["USER_ROLE"]=='normal'){RoleUtils::addRole('normal');}
        if ($record["USER_ROLE"]=='user'){RoleUtils::addRole('user');}
        if ($record["USER_ROLE"]=='owner'){RoleUtils::addRole('owner');}   
        if ($record["USER_ROLE"]=='admin'){RoleUtils::addRole('admin');}
        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //po walidacji = zalogowany = przchodzi do indexu z parametrami
            SessionUtils::store("loginf", $this->form->login);
            App::getRouter()->redirectTo("index");
        } else {
            //brak walidacji = brak zalogowania = pozostajesz na stronie logownaia z errorami
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('index');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('login.html');
    }
}

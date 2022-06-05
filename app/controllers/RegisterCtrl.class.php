<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\RegisterForm;

class RegisterCtrl {
    private $form;
    public function __construct() {
        $this->form = new RegisterForm();
    }

    public function validate() {
        //wyłącza warningi
        error_reporting(E_ALL ^ E_WARNING);     
        // https://stackoverflow.com/questions/1987579/remove-warning-messages-in-php
        
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->pass2 = ParamUtils::getFromRequest('pass2');
        $this->form->role = ParamUtils::getFromRequest('role');
        $this->form->role2 = ParamUtils::getFromRequest('role2');
        
        $login = $this->form->login;
        $pass = $this->form->pass;
        $pass2 = $this->form->pass2;
        $role = $this->form->role;
        $role2 = $this->form->role2;
        
        if (!isset($this->form->login))
            return false;
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (empty($this->form->pass2)) {
            Utils::addErrorMessage('Nie potwierdziłeś hasła');
        }
        if (empty($this->form->role) && empty($this->form->role2)) {
            Utils::addErrorMessage('Nie podano docelowej roli');
        }
        if ($pass != $pass2) {
            Utils::addErrorMessage('Hasła nie są takie same');
        }
        if (strlen($pass)<6) {
            Utils::addErrorMessage('Hasło jest zbyt krótkie');
        }
        if (strlen($pass)>20) {
            Utils::addErrorMessage('Hasło jest zbyt długie');
        }
        if (App::getMessages()->isError()){
            return false;
        }
        
        //dane z bazy, porównanie
        $record1 = App::getDB()->get("users","*",["USER_NAME"=>$login]);
        if ($record1 != NULL){Utils::addErrorMessage('Użytkownik ' . $login . ' istnieje już w bazie danych');}  //przykład dodawania wartości php w środku stringa
        
        return !App::getMessages()->isError();
    }
    
    public function action_register() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            if (empty($this->form->role2)){
            App::getDB()->insert("users", [
                    "USER_NAME" => $this->form->login,
                    "USER_PASS" => $this->form->pass,
                    "USER_ROLE" => $this->form->role
            ]);}
            else {
            App::getDB()->insert("users", [
                    "USER_NAME" => $this->form->login,
                    "USER_PASS" => $this->form->pass,
                    "USER_ROLE" => $this->form->role2
            ]);}
            
            if (empty($this->form->role2)){$this->action_newowner();}
            Utils::addErrorMessage('Rejestracja powiodła się');
            App::getRouter()->redirectTo("login");
            } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }
    
    public function action_newowner() {         // to cudo tworzy rekord ownera na bazie nowego usera
      $loginid = App::getDB()->get("users","USER_ID",["USER_NAME"=>$this->form->login]);
      App::getDB()->insert("owners", ["USER_ID" => $loginid]);  
    }
    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('register.html');
    }
}
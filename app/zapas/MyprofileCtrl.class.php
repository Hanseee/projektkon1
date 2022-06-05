<?php
namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\forms\MyProfileForm;
use core\SessionUtils;


/*      public $firmaname;      -> name
        public $firmadata;      -> data
        public $firmaaktyw;     -> aktyw
        public $firmapriv;     -> priv
        public $firmainfo;    -> info      */


class MyprofileCtrl {
    private $logininfo;
    private $roleinfo;
    public function __construct() {
        $this->form = new MyProfileForm();
    }
    
    
    public function validate() {
        error_reporting(E_ALL ^ E_WARNING);
        $this->form->name = ParamUtils::getFromRequest('firmaname');
        $this->form->data = ParamUtils::getFromRequest('firmadata');
        $this->form->aktyw = ParamUtils::getFromRequest('firmaaktyw');
        $this->form->priv = ParamUtils::getFromRequest('firmapriv');
        $this->form->info = ParamUtils::getFromRequest('firmainfo');
        
        if (empty($this->form->name)) {
            Utils::addErrorMessage('Nie podałeś nazwy');
        }
        if (empty($this->form->info)) {
            Utils::addErrorMessage('Nie określiłeś branży');
        }
        if (empty($this->form->data)) {
            Utils::addErrorMessage('Nie podałeś daty utworzenia');
        }
        $d = \DateTime::createFromFormat('Y-m-d', $this->form->data);
        if ($d === false) {
            Utils::addErrorMessage('Niepoprawny format daty. Poprawny format: yyyy-mm-dd');
        }
        $recordexp1 = App::getDB()->get("firmy","*",["FIRMA_NAME"=>$this->form->name]);
        if ($recordexp1 != NULL){Utils::addErrorMessage('Firma ' . $this->form->name . ' istnieje już w bazie danych');}
        if (App::getMessages()->isError()){
            return false;
        }
        
        return !App::getMessages()->isError();
    }    
    
        
    public function action_myprofile() {
    $this->tempInfo();
    //if ($this->roleinfo == 'Właściciel' && ParamUtils::getFromRequest('firmaname') == NULL){$this->action_nowafirma();} 
    //$this->generateView();
    }
    
    public function tempInfo() {
    $this->logininfo = SessionUtils::load("loginf",true);
    $rola = NULL;
        if (RoleUtils::inRole('normal'))
            {$rola = 'Gość';}
        if (RoleUtils::inRole('user'))
            {$rola = 'Użytkownik';}
        if (RoleUtils::inRole('owner'))
            {$rola = 'Właściciel';}
        if (RoleUtils::inRole('admin'))
            {$rola = 'Administrator';}
    $this->roleinfo = $rola;  
    }
    
    
    public function action_mojefirmy() {
    
    }
    
    public function action_nowafirma() {
        $this->tempInfo();
        if ($this->validate()) {
            //tutaj wyciągam owner ID użytkownika
           $localuserid = App::getDB()->get("users","USER_ID",["USER_NAME"=>$this->logininfo]);  
           $localownerid = App::getDB()->get("owners","OWNER_ID",["USER_ID"=>$localuserid]);
           $infoakt = NULL;
           $infopriv = NULL;
           if ($this->form->aktyw == NULL) {$infoakt = false;} else {$infoakt = true;}
           if ($this->form->priv == NULL) {$infopriv = false;} else {$infopriv = true;}
           App::getDB()->insert("firmy", [
                    "FIRMA_NAME" => $this->form->name,
                    "FIRMA_OWNER_ID" => $localownerid,
                    "FIRMA_DZ" => $this->form->data,
                    "FIRMA_AKTYW" => $infoakt,
                    "FIRMA_PRIV" => $infopriv,
                    "FIRMA_FIELD" => $this->form->info
            ]); 
           Utils::addErrorMessage('Utworzono firmę');
           $this->generateView();
        }
        else {
            $this->generateView();
        }    
    }
    
    public function generateView() {
        App::getSmarty()->assign('logininfo', $this->logininfo);
        App::getSmarty()->assign('roleinfo', $this->roleinfo);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('myprofile.html');
    }
}

//  if ($this->roleinfo == 'Właściciel'){$this->action_mojefirmy(); $this->action_nowafirma();} 
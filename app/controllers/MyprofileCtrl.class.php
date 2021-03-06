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
    private $records;
    
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
        if (!isset($this->form->name))
            return false;
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
    
    public function action_usunfirmy() {
        $localuserid = App::getDB()->get("users","USER_ID",["USER_NAME"=>$this->logininfo]);
        $localownerid = App::getDB()->get("owners","OWNER_ID",["USER_ID"=>$localuserid]);
        $this->form->firmausun = ParamUtils::getFromRequest('firmausun');               //boilerplate ale tak musi być
        if (App::getDB()->get("firmy","FIRMA_OWNER_ID",["FIRMA_NAME"=>$this->form->firmausun]) == $localownerid){
            App::getDB()->delete("firmy", [
                    "FIRMA_NAME"=>$this->form->firmausun
                ]);
        } else {Utils::addErrorMessage('To nie jest twoja firma.');}
    }
    
    /*public function action_mojefirmy() {           // nieaktualne, może się potem przydać
        $localuserid = App::getDB()->get("users","USER_ID",["USER_NAME"=>$this->logininfo]);  
        $localownerid = App::getDB()->get("owners","OWNER_ID",["USER_ID"=>$localuserid]);
        $this->records = App::getDB()->select("firmy", [
                "FIRMA_ID",
                "FIRMA_NAME",
                "FIRMA_DZ",
                "FIRMA_FIELD",
                "FIRMA_AKTYW",
                "FIRMA_PRIV"
                ], ["FIRMA_OWNER_ID"=>$localownerid]);
        Utils::addErrorMessage($localownerid);
    }*/
    
    public function action_myprofile() {
        $this->tempInfo();
        $this->form->firmausun = ParamUtils::getFromRequest('firmausun');
        if (isset($this->form->firmausun)){$this->action_usunfirmy();}
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
           
           $this->records = App::getDB()->select("firmy", [
                "FIRMA_ID",
                "FIRMA_NAME",
                "FIRMA_DZ",
                "FIRMA_FIELD",
                "FIRMA_AKTYW",
                "FIRMA_PRIV"
                ], ["FIRMA_OWNER_ID"=>$localownerid]);
           $this->generateView();
        }
        else {
        $localuserid = App::getDB()->get("users","USER_ID",["USER_NAME"=>$this->logininfo]);  
        $localownerid = App::getDB()->get("owners","OWNER_ID",["USER_ID"=>$localuserid]);   
        $this->records = App::getDB()->select("firmy", [
                "FIRMA_ID",
                "FIRMA_NAME",
                "FIRMA_DZ",
                "FIRMA_FIELD",
                "FIRMA_AKTYW",
                "FIRMA_PRIV"
                ], ["FIRMA_OWNER_ID"=>$localownerid]);
           $this->generateView();
        }    
    }
    
    public function generateView() {
        App::getSmarty()->assign('logininfo', $this->logininfo);
        App::getSmarty()->assign('roleinfo', $this->roleinfo);
        App::getSmarty()->assign('firmylista', $this->records);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('myprofile.html');
    }
}

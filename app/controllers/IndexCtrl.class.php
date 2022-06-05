<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\IndexForm;

/*
        public $name;
	public $field;
        public $kod;
 */

class IndexCtrl {
    private $logininfo;
    private $indexrecords;
    private $indexrecordspriv;
    
    public function __construct() {
        $this->form = new IndexForm();
    }
    
    public function action_index() {
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->field = ParamUtils::getFromRequest('field');
        $this->form->kod = ParamUtils::getFromRequest('kod');
        $tempinfo = SessionUtils::load("loginf",true);
        $localownerid = App::getDB()->get("owners","OWNER_ID",["USER_ID"=>$this->logininfo]);
        $this->logininfo = $tempinfo;
        
        if ($this->form->name == NULL && $this->form->field  == NULL && $this->form->kod == NULL){Utils::addErrorMessage('Brak parametrów'); $this->generateView();}  //bez wpisania czegokolwiek generuje widok
        else{                               //kiedy jest jakikolwiek paramter
        if (isset($this->logininfo)){  
        $search_params = [];
        if (isset($this->form->name) && strlen($this->form->name) > 0) {
            $search_params['FIRMA_NAME[~]'] = '%' . $this->form->name . '%';
        }
        if (isset($this->form->field) && strlen($this->form->field) > 0) {
            $search_params['FIRMA_FIELD[~]'] = '%' . $this->form->field . '%';
        }
        if (isset($this->form->kod)) {
            $search_params['FIRMA_PRIV[~]'] = 0;
        }
        $search_params['FIRMA_ID[~]'] = $this->form->kod;
        
        
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        //tutaj jeszcze indexrecordspriv z pokazaniem firm które mają id zalogowanego + priv=1
        $this->indexrecords = App::getDB()->select("firmy", [
                "FIRMA_ID",
                "FIRMA_NAME",
                "FIRMA_DZ",
                "FIRMA_FIELD",
                "FIRMA_AKTYW"
                ], $where);
        
        $this->generateView();
        }
        else{
            Utils::addErrorMessage('Niezalogowany');
        $this->generateView();}}
    }  
    
    public function generateView() {
        //przekazanie nazwy użytkownika
        $tempinfo = SessionUtils::load("loginf",true);
        $this->logininfo = $tempinfo;
        App::getSmarty()->assign('firmylista', $this->indexrecords);
        App::getSmarty()->assign('logininfo', $this->logininfo);
        App::getSmarty()->display("index.html");    //w widoku też działa
    }
}

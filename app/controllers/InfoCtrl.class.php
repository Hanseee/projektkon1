<?php
namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;


class InfoCtrl {
    private $logininfo;
    
    
    public function action_info() {
        
        
        
        $this->generateView(); 
    }
    
    public function generateView() {
        $tempinfo = SessionUtils::load("loginf",true);
        $this->logininfo = $tempinfo;
        App::getSmarty()->assign('logininfo', $this->logininfo);
        App::getSmarty()->display('info.html');
    }
}
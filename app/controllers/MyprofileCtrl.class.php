<?php
namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\LoginForm;

class MyprofileCtrl {
    public function action_myprofile() {
    $this->generateView();      
    }
    
    public function generateView() {
        App::getSmarty()->display('myprofile.html');
    }
}
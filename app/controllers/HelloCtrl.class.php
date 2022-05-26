<?php
namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class HelloCtrl {
    public function action_hello() {        
        $variable = 123;
        
        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");
        
        App::getSmarty()->assign("value",$variable);        
        App::getSmarty()->display("index.html");
    }  
}

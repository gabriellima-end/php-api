<?php

namespace App\Controller\Pages;

use App\Controller\Components\Main;
use App\Utils\View;

Class Home{
    public static function render(){
        $pageVars = [];

        $content = View::render("pages\home", $pageVars);

        return Main::render("inicio", $content);


    }



}





<?php


namespace App\Controller\Components;

use App\Utils\View;

Class Main{
    public static function render(string $title, string $content){
        $pageVars = [

            "title" => $title,
            "content" => $content

        ];

        return View::render("components/main", $pageVars);

        

    }



}

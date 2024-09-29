<?php

namespace App;

class MainController{
    public function render($view, $data = []){
        extract($data);

        include "View/$view.php";
    }
}
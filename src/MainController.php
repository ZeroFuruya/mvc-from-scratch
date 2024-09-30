<?php

namespace App;

class MainController{ // 3rd
    public function render($view, $data = []){
        extract($data);

        include "View/$view.php";
    }
}
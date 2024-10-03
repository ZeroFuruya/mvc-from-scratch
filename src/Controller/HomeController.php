<?php

namespace App\Controller;

use App\MainController;

class HomeController extends MainController{ // 4th
    public function index(){
        $this->render("index");
    }

    public function login(){
        $this->render("login");
    }

    public function multiplication(){
        $this->render("multiplication");
    }
}
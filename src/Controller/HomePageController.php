<?php

namespace App\Controller;

use App\MainController;

class HomePageController extends MainController{
    public function index(){
        $this->render("index");
    }

    public function login(){
        $this->render("login");
    }
}
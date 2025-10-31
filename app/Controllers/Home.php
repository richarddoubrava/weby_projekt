<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}

//class Home extends BaseController -- class home dědí vlastnosti basecontroller //*


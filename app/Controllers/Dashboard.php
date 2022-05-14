<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // tampilan utama
        return view('welcome_message');
    }
}

<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function edit()
    {
    }

    public function nyoboslur()
    {
        return view('hello gar');
    }
}

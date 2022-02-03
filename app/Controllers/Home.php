<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        return view('welcome_message');
    }

    public function something()
    {
        return view('test_page');
    }

    public function create()
    {
        return view('create_page');
    }
    public function read()
    {
        return view('read_page');
    }
    public function update()
    {
        return view('update_page');
    }
    public function delete()
    {
        return view('delete_page');
    }

    public function count()
    {
        $data = $_POST;
        return view('test_page', $data); 
    }
    
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string

    {
        $data =[
            'title' => 'Selamat datang di website kami',
            'title' => 'Selamat datang di website kami',

        ];
        return view('welcome_message', $data);
    }
}

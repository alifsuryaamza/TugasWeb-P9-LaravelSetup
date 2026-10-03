<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function contact()
    {
        $kontak = [
            'Email'  => 'alifsuryaamza@gmail.com',
            'GitHub' => 'github.com/alifsuryaamza',
        ];
        return view('contact', ['kontak' => $kontak]);
    }

    public function hello(string $nama)
    {
        return view('hello', ['nama' => ucfirst($nama)]);
    }
}
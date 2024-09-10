<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index()
    {

//        User::create([
//            'name' => 'James',
//            'email' => 'syncode2019@gmail.com',
//            'password' => bcrypt('Supernova2005!', [PASSWORD_BCRYPT]),
//            'created_at' => new \DateTimeImmutable(),
//        ]);

        return view('home', [
            'title' => 'Home',
        ]);
    }
}

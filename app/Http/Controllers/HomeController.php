<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PHPUnit\Framework\MockObject\Builder\Identity;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();

        return view('home' , compact('user'));
    }
}

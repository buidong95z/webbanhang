<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view ('page.trangchu');
    }

    public function getLogin(){
        return view ('auth.login');
    }
    public function getRegister(){
        return view ('auth.register');
    }
    public function Logout(){
       auth()->logout();
       return redirect()->route('getLogin')->with('sussces','logout susscesful');
    }
}

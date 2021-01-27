<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function users(){
        return view('pages.users.list');
    }

    public function loginCenter(){
        return view('pages.login1');
    }

    public function login(){
        return view('pages.login2');
    }

    public function registerOne(){
        return view('pages.register1');
    }

    public function registerTwo(){
        return view('pages.register2');
    }

    public function accountSetting(){
        return view('pages.account-setting');
    }

    public function invoice(){
        return view('pages.invoice.list');
    }
}

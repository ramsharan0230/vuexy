<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function users(){
        // return Post::all();
        return view('pages.users.list');
    }

    public function loginCenter(){
        return view('pages.users.login1');
    }

    public function login(){
        return view('pages.users.login2');
    }

    public function registerOne(){
        return view('pages.users.register1');
    }

    public function registerTwo(){
        return view('pages.users.register2');
    }

    public function accountSetting(){
        return view('pages.users.account-setting');
    }

    public function invoice(){
        return view('pages.invoice.list');
    }

    public function forgetPassword1(){
        return view('pages.users.forget-password1');
    }

    public function forgetPassword2(){
        return view('pages.users.forget-password2');
    }

    public function userProfile(){
        return view('pages.users.user-profile');
    }

    public function userEdit(){
        return view('pages.users.edit');
    }

    public function passwordReset1(){
        return view('pages.users.password-reset1');
    }

    public function passwordReset2(){
        return view('pages.users.password-reset2');
    }

    public function invoiceAdd(){
        return view('pages.invoice.add');
    }

    public function invoicePreview(){
        return view('pages.invoice.preview');
    }

    public function invoiceEdit(){
        return view('pages.invoice.edit');
    }

    public function inspects(){
        $carousels = \DB::table('inspections')->get();
        return view('pages.inspect.list', compact('carousels'));
    }
}

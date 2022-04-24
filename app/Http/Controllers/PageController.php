<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function allTools()
    {
        return view('page.all-tools');
    }

    public function rekapPinjam()
    {
        return view('page.rekap-pinjam');
    }

    public function inputData()
    {
        return view('page.input-data');
    }

    public function account()
    {
        return view('page.account');
    }
    public function signUp()
    {
        return view('page.signUp');
    }

    public function pilihLogin()
    {
        return view('page.pilih-login');
    }
    public function login()
    {
        return view('page.login');
    }

    public function loginAdmin()
    {
        return view('page.login-admin');
    }

    public function lupapassword()
    {
        return view('page.lupapassword');
    }

    public function inputUlangPassword()
    {
        return view('page.inputUlangPassword');
    }

}
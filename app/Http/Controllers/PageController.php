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

    public function login()
    {
        return view('page.login');
    }

}

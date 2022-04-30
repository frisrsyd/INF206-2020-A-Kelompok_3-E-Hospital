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

    public function lupapassword()
    {
        return view('page.lupapassword');
    }

    public function resetPassword()
    {
        return view('page.inputUlangPassword');
    }

    public function ketersediaanTool()
    {
        return view('page.ketersediaan');
    }

    public function historyPinjam()
    {
        return view('page.history');
    }

    public function detailHistory()
    {
        return view('page.detail-history');
    }

    public function editProfile()
    {
        return view('page.edit-profile');
    }

    public function syaratKetentuan()
    {
        return view('page.syarat-ketentuan');
    }

    public function onLoanUser()
    {
        return view('page.on-loan-user');
    }

    public function DetailonLoanUser()
    {
        return view('page.detail-on-loan-user');
    }

    public function onLoanAdmin()
    {
        return view('page.on-loan-admin');
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index',[
            'categories' => Category::all(),
        ]);
    }

    public function allTools()
    {
        return view('page.all-tools', [
            'categories' => Category::all(),
        ]);
    }

    public function rekapPinjam(Post $post)
    {   
        $post = Post::find($post->id);
        return view('page.rekap-pinjam', compact('post'));
    }

    public function inputData()
    {   
        $categories = DB::table('categories')->get();
        return view('page.input-data', compact('categories'));
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

    public function ketersediaanTool(Post $post)
    {   
        $post = $post::where('category_id', $post->category_id)->get();
        return view('page.ketersediaan', compact('post'));
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

    public function notifikasi()
    {
        return view('page.notifications');
    }

    public function strukPeminjaman()
    {
        return view('page.struk-peminjaman');
    }

    public function cetakStruk()
    {
        return view('page.cetak-struk');
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

    public function DetailonLoanAdmin()
    {
        return view('page.detail-on-loan-admin');
    }

    public function antrian()
    {
        return view('page.antrian');
    }

    public function detailAntrian()
    {
        return view('page.detail-antrian');
    }

}
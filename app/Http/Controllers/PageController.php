<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\checkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PageController extends Controller
{
    public function index()
    {   
        $category = Category::OrderBy('created_at');
        if(request('search')){
            $category = $category->where('name','like','%'.request('search').'%');
        }

        return view('page.index',[
            'categories' => $category->paginate(10),
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

    public function ketersediaanTool(Post $post, checkout $checkout)
    {   
        // $post = DB::table('posts')->where('category_id', $post->id)->get();
        $post = Post::where('category_id', $post->id)->get();
        return view('page.ketersediaan', compact('post', 'checkout'));
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

    public function strukPeminjaman(checkout $checkout)
    {   
        return view('page.struk-peminjaman', compact('checkout'));
    }

    public function cetakStruk(checkout $checkout)
    {
        return view('page.cetak-struk', compact('checkout'));
    }
  
    public function syaratKetentuan()
    {
        return view('page.syarat-ketentuan');
    }

    public function onLoanUser()
    {
        return view('page.on-loan-user');
    }

    public function DetailonLoanUser(checkout $checkout)
    {
        return view('page.detail-on-loan-user', compact('checkout'));
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
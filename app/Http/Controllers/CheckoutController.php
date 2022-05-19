<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\checkout;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function update(Request $request, Post $post)
    {   
        $checkout = checkout::orderBy('created_at', 'desc')->get();
        $checkout = checkout::where('post_id', $post->id)->where('user_id', Auth::user()->id)->first();
        $jumlah_pinjam = $checkout->jumlah_pinjam;
        $status = '';

        $jumlah_alat = $post->jumlah_alat;
        $jumlah_alat = $jumlah_alat - $jumlah_pinjam;
        if($jumlah_alat > 0){
            $status = 'Tersedia';
        }else{
            $status = 'Tidak Tersedia';
        }
        $post->update([
            'jumlah_alat' => $jumlah_alat,
            'status' => $status,
        ]);
        if($post){
            $url = 'cetak-struk/' . $checkout->id;
            echo "<script>window.open('".$url."', '_blank')</script>";
            // return redirect('cetak-struk/' . $checkout->id)->with('status', 'Berhasil checkout');
        }else{
            return redirect('/')->with('status', 'Gagal checkout');
        }
    }
    
    public function store(Request $request, Post $post)
    {   
        $validatedData = $request->validate([
            'jumlahPinjam' => 'required|numeric',
            'tgl_mulai' => 'required|date',
            'tgl_akhir' => 'required|date',
        ]);
        $jumlah_pinjam = $request->jumlahPinjam;
        $status = 'Sedang Dipinjam';
        $tgl_mulai = $request->tgl_mulai;
        $tgl_akhir = $request->tgl_akhir;
        $user_id = Auth::user()->id;
        $post_id = $post->id;

        $checkout_ref = checkout::create([
            'user_id' => $user_id,
            'post_id' => $post_id,
            'jumlah_pinjam' => $jumlah_pinjam,
            'tgl_mulai' => $tgl_mulai,
            'tgl_akhir' => $tgl_akhir,
            'status' => $status,
        ]);
        $checkout_id = $checkout_ref->id;
        if($checkout_ref){
            return redirect('struk-peminjaman/'. $checkout_id)->with('status', 'Berhasil checkout');
        }else{
            return redirect('/')->with('status', 'Gagal checkout');
        }
    }
}

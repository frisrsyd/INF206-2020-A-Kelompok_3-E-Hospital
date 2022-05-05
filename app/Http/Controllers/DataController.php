<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'toolName' => 'required|declined_if:toolName,==,"Pilih jenis alat"',
            'location' => 'required|url|active_url',
            'jumlahAlat' => 'required|integer|min:1',
        ]);

        $folder = 'tool_images';
        $image = $request->file('image');
        $imageName = time(). '_' .$image->getClientOriginalName();
        $image->move($folder, $imageName);

        $post_ref = Post::create([
            'image' => $imageName,
            'tool_name' => $request->toolName,
            'link_location' => $request->location,
            'jumlah_alat' => $request->jumlahAlat,
            'user_id' => auth()->user()->id,
        ]);

        if($post_ref) {
            return redirect('/account')->with('status', 'Input Success');
        }else{
            return redirect('/input-data')->with('status', 'Input Failed');
        }
    }
}

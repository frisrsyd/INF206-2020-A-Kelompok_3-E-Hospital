<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datauser;

class datauserController extends Controller
{ 
    public function dataUser()
    {
        $data_user =  Datauser::All();
        return view ('data-user',compact('data_user')); 
    }
}

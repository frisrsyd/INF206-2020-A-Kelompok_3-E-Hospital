<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailOnloan;

class DetailOnLoanController extends Controller
{
    public function DetailonLoanUser()
    {
        $data_DetailOnLoan = checkouts ::all();
       return view ('detail-on-loan-user',compact ('data_DetailOnLoan'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{


    public function Fashion()
    {
        return view('fashionv2.fashionv2');
    }

    public function Jewelry()
    {
        return view('jewelry.jewelry');
    }
}

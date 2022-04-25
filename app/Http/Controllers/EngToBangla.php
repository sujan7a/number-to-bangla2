<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rakibhstu\Banglanumber\NumberToBangla;

class EngToBangla extends Controller
{

    public function home()
    {
        $numto = new NumberToBangla();

        // dd($numto);
        return view('welcome', [
            'numto' => $numto,
        ]);
    }
}

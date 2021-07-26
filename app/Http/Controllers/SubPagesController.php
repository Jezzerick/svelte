<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubPagesController extends Controller
{
    public function getLambo() {
        return view('lambo');
    }

    public function getFinance() {
        return view ('finance');
    }


}

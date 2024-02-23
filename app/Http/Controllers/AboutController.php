<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return 'Nama: Triyana Dewi Fatmawati' . '<br>' . 'NIM: 2241720206';
    }
}

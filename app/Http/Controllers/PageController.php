<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    } 

    public function about(){
        return 'Nama: Triyana Dewi Fatmawati' . '<br>' . 'NIM: 2241720206';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID ' . $id;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return ('Selamat Datang');
    }

    public function about() {
        return ('NIM saya 244107020154, Nama saya Hafiz Rizqi Hernanda');
    }

    public function articles($articleId) {
        return 'Halaman artikel dengan ID ke-'.$articleId;
    }
}

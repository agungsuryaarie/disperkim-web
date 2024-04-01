<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Halaman;
use App\Models\Layanan;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $title = 'Website Resmi Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup | Kabupaten Batu Bara';
        $menu = 'Kontak';
        $setting = Setting::first();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        return view('front.kontak', compact('title', 'menu', 'setting', 'halaman', 'layanan'));
    }
}

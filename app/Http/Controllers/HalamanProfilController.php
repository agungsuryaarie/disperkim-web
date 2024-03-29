<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use App\Models\Layanan;
use App\Models\Berita;
use App\Models\Banner;
use App\Models\Setting;
use Illuminate\Http\Request;

class HalamanProfilController extends Controller
{
    public function index($slug)
    {
        $title = 'Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $halaman = Halaman::orderBy('id')->get();
        $profil = Halaman::where('slug', $slug)->orderBy('id')->first();
        $recent_post = Berita::limit(4)->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $setting = Setting::first();
        return view('front.halamanprofil', compact('title', 'halaman', 'profil', 'recent_post', 'popular', 'layanan', 'setting', 'banner'));
    }
}

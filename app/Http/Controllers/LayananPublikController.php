<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Berita;
use App\Models\Halaman;
use App\Models\Setting;
use App\Models\Banner;
use Illuminate\Http\Request;

class LayananPublikController extends Controller
{
    public function index($slug)
    {
        $title = 'Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $layanan = Layanan::orderBy('id')->get();
        $lapub = Layanan::where('slug', $slug)->orderBy('id')->first();
        $recent_post = Berita::limit(4)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $setting = Setting::first();
        return view('front.layanan', compact('title', 'layanan', 'lapub', 'recent_post', 'banner', 'popular', 'halaman', 'setting'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Slideshow;
use App\Models\Berita;
use App\Models\Link;
use App\Models\Halaman;
use App\Models\Layanan;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Website Resmi Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup | Kabupaten Batu Bara';
        $slideshow = Slideshow::orderBy('id', 'desc')->limit(3)->get();
        $link = Link::orderBy('id', 'desc')->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $berita_dinas = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Dinas')->limit(1)->get();
        $berita_pemerintahan = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Pemerintahan')->limit(6)->get();
        $berita_nasional = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Nasional')->limit(6)->get();
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $post_latest = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Dinas')->offset(1)->limit(5)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('front.home', compact(
            'title',
            'slideshow',
            'link',
            'banner',
            'berita_dinas',
            'post_latest',
            'berita_pemerintahan',
            'berita_nasional',
            'popular',
            'halaman',
            'layanan',
            'setting'

        ));
    }
}

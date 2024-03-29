<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Halaman;
use App\Models\Layanan;
use App\Models\Setting;
use App\Models\Banner;
use Illuminate\Http\Request;

class BeritaFrontController extends Controller
{
    public function index()
    {
        $title = 'Berita - Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $menu = 'Berita';
        $pagination = 8;
        $berita = Berita::orderBy('id', 'desc')->latest()->paginate($pagination);
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $setting = Setting::first();
        return view('front.berita', compact('berita', 'title', 'menu', 'halaman', 'layanan', 'popular', 'banner', 'setting'));
    }

    public function dinas()
    {
        $title = 'Berita - Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $title2 = 'Kategori Dinas';
        $pagination = 8;
        $berita_dinas = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Dinas')->latest()->paginate($pagination);
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $setting = Setting::first();
        return view('front.berita_dinas', compact('berita_dinas', 'title', 'title2', 'halaman', 'popular', 'layanan', 'banner', 'setting'));
    }

    public function pemerintahan()
    {
        $title = 'Berita - Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $title2 = 'Kategori Pemerintahan';
        $pagination = 8;
        $berita_pemerintahan = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Pemerintahan')->latest()->paginate($pagination);
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $setting = Setting::first();
        return view('front.berita_pemerintahan', compact('berita_pemerintahan', 'title', 'title2', 'halaman', 'popular', 'layanan', 'banner', 'setting'));
    }

    public function nasional()
    {
        $title = 'Berita - Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $title2 = 'Kategori Nasional';
        $pagination = 8;
        $berita_nasional = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Nasional')->latest()->paginate($pagination);
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $setting = Setting::first();
        return view('front.berita_nasional', compact('berita_nasional', 'title', 'title2', 'halaman', 'popular', 'layanan', 'banner', 'setting'));
    }

    public function show(Berita $berita)
    {
        $menu = 'Berita';
        $title = $berita->title;
        $view = $berita->viewer + 1;
        $berita->update(['viewer' => $view]);
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $recent_post = Berita::inRandomOrder()->limit(3)->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('front.berita_show', compact('title', 'menu', 'berita', 'recent_post', 'halaman', 'popular',  'layanan', 'view', 'setting', 'banner'));
    }
}

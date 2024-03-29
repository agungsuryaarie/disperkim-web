<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Foto;
use App\Models\Berita;
use App\Models\Halaman;
use App\Models\Layanan;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\Video;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index(Request $request, Foto $id)
    {
        $title = 'Galeri Foto - Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $foto = Galeri::orderBy('id', 'desc')->latest()->paginate(20);
        $jml_foto = Foto::where('id')->where('galeri_id', $id)->count();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('front.foto', compact('title', 'foto', 'halaman', 'layanan', 'setting', 'jml_foto'));
    }

    public function show($id)
    {
        $title = 'Galeri Foto - Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $foto = Galeri::orderBy('id', 'desc')->find($id);
        $detail = Foto::where('galeri_id', $id)->get();
        $other = Galeri::inRandomOrder()->limit(4)->get();
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('front.foto_show', compact('title', 'detail', 'other', 'halaman', 'layanan', 'setting', 'foto'));
    }

    public function video()
    {
        $title = 'Video - Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $video = Video::orderBy('id', 'desc')->latest()->paginate(9);
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('front.video', compact('title', 'video', 'setting', 'halaman', 'layanan'));
    }
    public function showv(Video $video)
    {
        $title = 'Video - Website Resmi Dinas Pemuda, Olahraga dan Pariwisata | Kabupaten Batu Bara';
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $other = Video::inRandomOrder()->limit(4)->get();
        $banner = Banner::orderBy('id', 'desc')->limit(1)->get();
        $popular = Berita::orderBy('viewer', 'desc')->limit(5)->get();
        $setting = Setting::first();
        return view('front.video_show', compact('title', 'video', 'halaman', 'other', 'layanan', 'popular', 'banner', 'setting'));
    }
}

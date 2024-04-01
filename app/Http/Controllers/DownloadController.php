<?php

namespace App\Http\Controllers;

use App\Models\Filedownload;
use App\Models\Halaman;
use App\Models\Layanan;
use App\Models\Setting;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $title = 'Website Resmi Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup | Kabupaten Batu Bara';
        $download = Filedownload::latest()->paginate(5);
        $halaman = Halaman::orderBy('id', 'asc')->get();
        $layanan = Layanan::orderBy('id', 'asc')->get();
        $setting = Setting::first();
        return view('front.download', compact(
            'title',
            'download',
            'halaman',
            'layanan',
            'setting'
        ));
    }
}

@extends('front.layouts.app')

@section('content')
    <div class="mag-breadcrumb py-7 pb-1">
        <div class="container-sm">
            <div class="row ">
                <div class="col-xl-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}"><i class='bx bx-home-circle'></i>
                                    Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $profil->judul }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="post-details-area">
        <div class="container-sm">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="post-details-content bg-white p-30 mb-30 mt-30 bx-shadow">
                        <div class="mb-30">
                            <img alt="" src="{{ url('storage/halaman', $profil->gambar) }}" class="img-details">
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title">{{ $profil->judul }}</h4>
                            <div class="post-meta-2">
                                <a href="#"><i class="bi bi-calendar"></i>
                                    {{ date('d M Y', strtotime($profil->tanggal)) }}</a>
                                <a href="#"><i class="bi bi-clock"></i> {{ $profil->jam }} WIB</a>
                            </div>
                            <p>{!! $profil->isi_halaman !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 mt-30 bx-shadow">
                        <div class="single-sidebar-widget">
                            @foreach ($banner as $b)
                                <img src="{{ url('storage/banner', $b->gambar) }}" class="img-banner mb-10" alt="">
                            @endforeach
                        </div>
                        <x-popularPost :popular="$popular"></x-popularPost>
                        <div class="widget" id="gpr">
                            <div id="gpr-kominfo-widget-container"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

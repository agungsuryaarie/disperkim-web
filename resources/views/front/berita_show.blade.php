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
                            <li class="breadcrumb-item active" aria-current="page">{{ $menu }}</li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $berita->judul }}</li>
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
                            <img alt="" src="{{ url('storage/berita/' . $berita->foto) }}" class="img-details">
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title">{{ $berita->judul }}</h4>
                            <div class="post-meta-2">
                                <a href="#"><i class="bi bi-calendar"></i>
                                    {{ date('d M Y', strtotime($berita->tanggal)) }}</a>
                                <a href="#"><i class="bi bi-clock"></i> {{ $berita->jam }} WIB</a>
                                <a href="#"><i class="bi bi-eye"></i> {{ $berita->viewer }} x</a>
                            </div>
                            <p>{!! $berita->isi !!} </p>
                        </div>
                    </div>
                    <div class="related-post-area bg-white mb-30 p-30 mt-30 bx-shadow">
                        <div class="section-heading">
                            <h5>BERITA TERKAIT</h5>
                        </div>
                        <div class="row">
                            @foreach ($recent_post as $rpost)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-blog-post style-4 mb-30">
                                        <div class="post-thumbnail">
                                            <img src="{{ url('storage/berita/' . $rpost->foto) }}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="{{ route('berita.show', $rpost->slug) }}"
                                                class="post-title">{{ $rpost->judul }}</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="bi bi-calendar" aria-hidden="true"></i>
                                                    {{ date('d M Y', strtotime($rpost->tanggal)) }}</a>
                                                <a href="#"><i class="bi bi-eye" aria-hidden="true"></i>
                                                    {{ $rpost->viewer }}x</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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

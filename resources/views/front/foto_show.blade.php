@extends('front.layouts.app')

@section('content')
    <div class="mag-breadcrumb py-7 pb-1">
        <div class="container-sm">
            <div class="row">
                <div class="col-xl-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}"><i class='bx bx-home-circle'></i>
                                    Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('media.index') }}"> Galeri Foto</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="post-details-area portfolio">
        <div class="container-sm">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                    <div class="post-details-content bg-white p-30 mb-30 mt-30 bx-shadow">
                        <div class="blog-content">
                            <div class="section-heading">
                                <h5>{{ $foto->judul }}</h5>
                            </div>
                            <div class="row">
                                @foreach ($detail as $d)
                                    <div class="col-lg-3 mt-30 mb-30">
                                        <div class="portfolio-wrap">
                                            <img src="{{ url('storage/foto/' . $d->foto) }}" class="img-galeri-detail"
                                                alt="">
                                            <div class="portfolio-info">
                                            </div>
                                            <div class="portfolio-links">
                                                <a href="{{ url('storage/foto/' . $d->foto) }}"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-zoom-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="post-details-area">
        <div class="container-sm">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                    <div class="post-details-content bg-white p-30 mb-30 mt-30 bx-shadow">
                        <div class="blog-content">
                            <div class="section-heading">
                                <h5>Galeri Foto Lainnya</h5>
                            </div>
                            <div class="row">
                                @foreach ($other as $ot)
                                    <div class="col-lg-3">
                                        <a href="{{ route('media.show', $ot->id) }}">
                                            <img src="{{ url('storage/galeri/' . $ot->cover) }}" class="img-galeri mb-10">
                                            <h6>{{ $ot->judul }}</h6>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

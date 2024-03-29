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
                    <div class="archive-posts-area bg-white p-30 mb-30 mt-30 bx-shadow">
                        @foreach ($berita as $all)
                            <div class="single-catagory-post d-flex flex-wrap">
                                <div class="post-thumbnail bg-img"
                                    style="background-image: url({{ url('storage/berita/' . $all->foto) }});">
                                </div>
                                <div class="post-content">
                                    <a href="{{ route('berita.show', $all->slug) }}"
                                        class="post-title">{{ $all->judul }}</a>
                                    <div class="post-meta-2">
                                        <a href="#"><i class="bi bi-calendar"></i>
                                            {{ date('d M Y', strtotime($all->tanggal)) }}</a>
                                        <a href="#"><i class="bi bi-clock"></i> {{ $all->jam }} WIB</a>
                                        <a href="#"><i class="bi bi-eye"></i> {{ $all->viewer }} x</a>
                                    </div>
                                    <p> {!! Str::limit($all->isi, $limit = 300, $end = '...') !!}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-center">
                            {{ $berita->links('pagination::bootstrap-4') }}
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
                    </div>
                </div>
            </div>
    </section>
@endsection

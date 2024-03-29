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
                            <li class="breadcrumb-item active" aria-current="page">Video</li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $video->judul }}</li>
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
                            <div class="hidden">
                                {{ preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video->url, $video_link) }}
                            </div>
                            <iframe src="https://www.youtube.com/embed/{{ $video_link[1] }}" allowfullscreen
                                class="video-responsive" title="Video Profil"></iframe>
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title">{{ $video->judul }}</h4>
                            <p>{!! $video->deskripsi !!}</p>
                        </div>
                    </div>
                    <div class="related-post-area bg-white p-30 mb-30 mt-30 bx-shadow">
                        <div class="section-heading">
                            <h5>VIDEO LAINNYA</h5>
                        </div>
                        <div class="row">
                            @foreach ($other as $ot)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-blog-post style-4 mb-30">
                                        <div class="hidden">
                                            {{ preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $ot->url, $video_link) }}
                                        </div>
                                        <div class="post-thumbnail">
                                            <img src="https://img.youtube.com/vi/{{ $video_link[1] }}/0.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="{{ route('video.show', $ot->slug) }}"
                                                class="post-title">{{ $ot->judul }}</a>
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

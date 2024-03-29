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
                            <li class="breadcrumb-item active" aria-current="page">Video</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="post-details-area">
        <div class="container-sm">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                    <div class="post-details-content bg-white p-30 mb-30 mt-30 bx-shadow">
                        <div class="blog-content">
                            <div class="section-heading">
                                <h5>Video</h5>
                            </div>
                            <div class="row">
                                @foreach ($video as $vid)
                                    <div class="col-lg-3">
                                        <a href="{{ route('video.show', $vid->slug) }}">
                                            <div class="hidden">
                                                {{ preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $vid->url, $video_link) }}
                                            </div>
                                            <img src="https://img.youtube.com/vi/{{ $video_link[1] }}/0.jpg"
                                                class="img-video mb-10">
                                            <h6>{{ $vid->judul }}</h6>
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

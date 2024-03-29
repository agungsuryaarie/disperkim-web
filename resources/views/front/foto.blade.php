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
                            <li class="breadcrumb-item"><a href="{{ route('media.index') }}">Galeri Foto</a></li>
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
                                <h5>Galeri Foto</h5>
                            </div>
                            <div class="row">
                                @foreach ($foto as $f)
                                    <div class="col-lg-3 mb-30">
                                        <a href="{{ route('media.show', $f->id) }}">
                                            <img src="{{ url('storage/galeri/' . $f->cover) }}" class="img-galeri mb-10">
                                            <h6>{{ $f->judul }}</h6>
                                        </a>
                                    </div>
                                @endforeach
                                <div class="d-flex justify-center">
                                    {{ $foto->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

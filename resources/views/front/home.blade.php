@extends('front.layouts.app')

@section('content')
    <div class="container-area">
        <div class="px-6">
            <div class="slideshow">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($slideshow as $s)
                            <div class="carousel-item active">
                                <img src="{{ url('storage/slideshow/' . $s->gambar) }}" class="d-block w-100" alt="...">
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <main id="main">
        <div class="container-area">
            <div class="mag-posts-area d-flex flex-wrap justify-content-center">
                <div class="mag-posts-content bx-shadow mb-30 mt-30 p-30">
                    <div class="section-tittle mb-10">
                        <div class="d-flex justify-content-between">
                            <h2>BERITA DINAS</h2>
                            <a href="{{ route('berita.dinas') }}"
                                class="d-flex align-items-center jss-cinfo text-hover-primary">Lihat semua
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($berita_dinas as $d)
                            <div class="col-lg-7 col-md-12 mb-5">
                                <div class="blog-grid sm-margin-bottom-40">
                                    <div class="blog-grid-grad">
                                        <img src="{{ url('storage/berita', $d->foto) }}" class="img-post">
                                    </div>
                                    <h3><a href="{{ route('berita.show', $d->slug) }}">{{ $d->judul }}</a></h3>
                                    <ul class="blog-grid-info">
                                        <li><i class="bi bi-calendar"></i>
                                            {{ date('d M Y', strtotime($d->tanggal)) }}
                                        </li>
                                        <li><i class="bi bi-clock"></i> {{ $d->jam }} WIB</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-5 col-md-12">
                            @foreach ($post_latest as $post)
                                <div class="blog-thumb-v2">
                                    <div class="blog-thumb-grad">
                                        <img src="{{ url('storage/berita', $post->foto) }}" alt="">
                                    </div>
                                    <div class="blog-thumb-desc">
                                        <h3><a href="{{ route('berita.show', $post->slug) }}">{{ $post->judul }}</a>
                                        </h3>
                                        <ul class="blog-thumb-info">
                                            <li><i class="bi bi-calendar"></i>
                                                {{ date('d M Y', strtotime($post->tanggal)) }}
                                            </li>
                                            <li><i class="bi bi-eye"></i> {{ $post->viewer }} x</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <section id="pemerintahan" class="">
                        <div class="section-tittle mb-3">
                            <div class="d-flex bd-highlight">
                                <h2 class="flex-grow-1 bd-highlight">BERITA PEMERINTAHAN</h2>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="swiper Pemerintahan ">
                                <div class="swiper-wrapper">
                                    @foreach ($berita_pemerintahan as $p)
                                        <div class="swiper-slide">
                                            <div class="mx-auto">
                                                <div class="card">
                                                    <img src="{{ url('storage/berita/' . $p->foto) }}"
                                                        class="card-img-post" alt="Gambar">
                                                    <div class="card-img-overlay d-flex flex-column justify-end">
                                                        <a href="{{ route('berita.show', $p->slug) }}">
                                                            <p class="card-text text-white mb-2">{{ $p->judul }}
                                                            </p>
                                                        </a>
                                                        <ul class="blog-info">
                                                            <li><i class="bi bi-calendar"></i>
                                                                {{ date('d M Y', strtotime($p->tanggal)) }}
                                                            </li>
                                                            <li><i class="bi bi-clock"></i> {{ $p->jam }} WIB
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div
                                class="swipper-nav absolute top-5 right-0 flex items-center justify-center space-x-2 pr-6 mt-[1.2rem] mb-3 z-50">
                                <button class="swiper-button-prevv swiper-button-prevv-Pemerintahan">
                                    <i class='bx bx-chevron-left'></i>
                                </button>
                                <button class="swiper-button-nextt swiper-button-nextt-Pemerintahan">
                                    <i class='bx bx-chevron-right'></i>
                                </button>
                            </div>
                        </div>
                    </section>

                    <section class="bg-body-tertiary pt-24">
                        <div class="section-tittle mb-3">
                            <div class="d-flex bd-highlight align-items-center">
                                <h2 class="flex-grow-1 bd-highlight">BERITA NASIONAL</h2>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="swiper Nasional">
                                <div class="swiper-wrapper">
                                    @foreach ($berita_nasional as $n)
                                        <div class="swiper-slide">
                                            <div class="blog__item">
                                                <div class="blog__item__pic set-bg">
                                                    <img src="{{ url('storage/berita', $n->foto) }}">
                                                </div>
                                                <div class="blog__item__text">
                                                    <h6><a
                                                            href="{{ route('berita.show', $n->slug) }}">{{ $n->judul }}.</a>
                                                    </h6>
                                                    <ul>
                                                        <li><i class="bi bi-calendar"></i>
                                                            {{ date('d M Y', strtotime($n->tanggal)) }}</li>
                                                        <li><i class="bi bi-clock"></i> {{ $n->jam }} WIB</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="swipper-nav">
                                <button class="swiper-button-prevv swiper-button-prevv-Nasional">
                                    <i class='bx bx-chevron-left'></i>
                                </button>
                                <button class="swiper-button-nextt swiper-button-nextt-Nasional">
                                    <i class='bx bx-chevron-right'></i>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="post-sidebar-area bx-shadow mb-30 mt-30">
                    <div class="blog-grid-grad">
                        @foreach ($banner as $b)
                            <img src="{{ url('storage/banner', $b->gambar) }}" class="img-banner mb-10" alt="">
                        @endforeach
                        <x-popularPost :popular="$popular"></x-popularPost>
                        <div class="widget" id="gpr">
                            <div id="gpr-kominfo-widget-container"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <section id="testimonials" class="testimonials pt-24 mb-5">
                <div class="container" data-aos="fade-up">
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @foreach ($link as $l)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ url('storage/link/' . $l->gambar) }}" class="testimonial-img"
                                            alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section> --}}
    </main>
@endsection

@section('script')
    <script>
        function initializeSwiper(containerClass, slidesPerView) {
            var swiper = new Swiper("." + containerClass, {
                spaceBetween: 25,
                slidesPerView: slidesPerView,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-nextt-" + containerClass,
                    prevEl: ".swiper-button-prevv-" + containerClass,
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: slidesPerView,
                        spaceBetween: 30,
                    },
                }
            });
        }

        // Initialize swiper for each category
        initializeSwiper("Pemerintahan", 3);
        initializeSwiper("Nasional", 2);
    </script>
@endsection

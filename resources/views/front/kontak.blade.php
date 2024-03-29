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
                            <li class="breadcrumb-item active" aria-current="page">{{ $menu }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container-sm" data-aos="fade-up">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="post-details-content bg-white mb-30 p-30 mt-30 bx-shadow">
                        <div class="section-heading">
                            <h5>Kontak</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-30">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.835016500076!2d99.45531493955079!3d3.2984318999999966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3033c17c4369c2a5%3A0x40fcd3439c3c6e4e!2sDisporabudpar%20kab.batubara!5e0!3m2!1sid!2sid!4v1711625589153!5m2!1sid!2sid"
                                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="contact-information mb-30">
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="bx bx-map" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Alamat:</p>
                                    <h6>{{ $setting->alamat }}</h6>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="bx bx-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Email:</p>
                                    <h6>{{ $setting->email }}</h6>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="bx bx-phone-call" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Phone:</p>
                                    <h6>{{ $setting->telepon }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

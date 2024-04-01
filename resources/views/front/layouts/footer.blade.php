<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row px-6">
                <div class="col-lg-4">
                    <img src="{{ url('front/img/logo-white.png') }}" class="img-footer mb-6">
                    <div class="social-links text-md-right pt-3 pt-md-0">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Kategori Berita</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('berita.dinas') }}">Dinas</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                href="{{ route('berita.pemerintahan') }}">Pemerintahan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('berita.nasional') }}">Nasional</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Profil</h4>
                    <ul>
                        @foreach ($halaman as $h)
                            <li><i class="bx bx-chevron-right"></i><a
                                    href="{{ route('halamanprofil.index', $h->slug) }}">{{ $h->judul }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Kontak Kami</h4>
                    <li class="text-footer mb-3"><i class="bi bi-house-fill"></i> {{ $setting->alamat }}</li>
                    <li class="text-footer mb-3"><i class="bi bi-telephone-inbound-fill"></i> {{ $setting->telepon }}
                    </li>
                    <li class="text-footer mb-3"><i class="bi bi-envelope-open-fill"></i> {{ $setting->email }}</li>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="px-4">
            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        Copyright &copy; <?php echo date('Y'); ?> <span>{{ $setting->nama_instansi }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader">
</div>

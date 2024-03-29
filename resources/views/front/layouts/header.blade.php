<header id="header" class="fixed-top ">
    <div class="container">
        <div class="px-4">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="{{ route('home.index') }}">
                        <img src="{{ url('storage/setting/' . $setting->gambar) }}" alt="" class="img-fluid">
                    </a>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ route('home.index') }}">Home</a></li>
                        <li class="dropdown"><a href="#"><span>Profil</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($halaman as $h)
                                    <li><a href="{{ route('halamanprofil.index', $h->slug) }}">{{ $h->judul }}</a>
                                    </li>
                                @endforeach
                        </li>
                    </ul>

                    <li class="dropdown"><a href="{{ route('berita.index') }}"><span>Berita</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('berita.dinas') }}">Dinas</a></li>
                            <li><a href="{{ route('berita.pemerintahan') }}">Pemerintahan</a></li>
                            <li><a href="{{ route('berita.nasional') }}">Nasional</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Layanan Publik</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($layanan as $l)
                                <li><a href="{{ route('layananpublik.index', $l->slug) }}">{{ $l->judul }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('media.index') }}">Foto</a></li>
                            <li><a href="{{ route('media.video') }}">Video</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('download.index') }}">Download</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('kontak.index') }}">Kontak Kami</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>
    </div>
</header>

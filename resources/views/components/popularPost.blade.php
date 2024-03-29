<div class="news-populart">
    <div class="section-populart-title">
        <h5>BERITA TERPOPULER</h5>
    </div>
    @foreach ($popular as $p)
        <div class="blog-thumb-v2 mb-3">
            <div class="blog-thumb-grad">
                <img src="{{ url('storage/berita', $p->foto) }}" alt="">
            </div>
            <div class="blog-thumb-desc">
                <h3>
                    <a
                        href="{{ route('berita.show', $p->slug) }}">{{ Str::limit($p->judul, $limit = 60, $end = '...') }}</a>
                </h3>
                <ul class="blog-thumb-info">
                    <li><i class="bi bi-calendar"></i> {{ date('d M Y', strtotime($p->tanggal)) }}
                    </li>
                    <li><i class="bi bi-eye"></i> {{ $p->viewer }} x</li>
                </ul>
            </div>
        </div>
    @endforeach
</div>
<div class="widget" id="gpr">
    <div id="gpr-kominfo-widget-container"></div>
</div>

@props(['surah'])

<a href="/surah/{{ $surah['nomor'] }}" class="surah-card">
    <div class="surah-num">{{ $surah['nomor'] }}</div>

    <div class="surah-info">
        <div class="surah-name">{{ $surah['nama_latin'] }}</div>
        <div class="surah-meta">
            {{ $surah['arti'] }}
            <span class="dot">•</span>
            {{ $surah['jumlah_ayat'] }} ayat
        </div>
    </div>

    <div class="surah-arabic">{{ $surah['nama'] }}</div>
    <div class="surah-chevron">›</div>
</a>

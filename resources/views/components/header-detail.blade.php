@props(['surah'])

<div class="app-header-detail">

    <div class="header-top">
        <a href="/" class="btn-back">‹</a>
    </div>

    <div class="header-body">
        <div class="surah-number-badge">Surat {{ $surah['nomor'] }}</div>
        <h1 class="surah-title">{{ $surah['nama_latin'] }}</h1>

        <p class="surah-subtitle">
            {{ $surah['arti'] }}
            <span>•</span>
            {{ $surah['jumlah_ayat'] }} Ayat
            <span>•</span>
            {{ $surah['tempat_turun'] ?? 'Makkiyah' }}
        </p>

        <div class="surah-arabic-title">{{ $surah['nama'] }}</div>
    </div>

</div>

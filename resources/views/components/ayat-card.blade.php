@props(['ayat', 'surah'])

<div class="ayat-card">

    <div class="ayat-num-bar">
        <div class="ayat-badge">
            <div class="num">{{ $ayat['nomor'] ?? $loop->iteration }}</div>
            <div class="surah-ref">
                {{ $surah['nama_latin'] }} : {{ $ayat['nomor'] ?? $loop->iteration }}
            </div>
        </div>
    </div>

    <div class="ayat-content">
        <div class="ayat-arabic">{{ $ayat['ar'] }}</div>
        <div class="ayat-latin">{!! $ayat['tr'] !!}</div>
        <p class="ayat-translation">{{ $ayat['idn'] }}</p>
    </div>

</div>

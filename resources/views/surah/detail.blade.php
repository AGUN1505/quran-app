@extends('layouts.app')
@section('title', $surah['nama_latin'])

@section('content')

<x-header-detail :surah="$surah" />

@if($surah['nomor'] != 9)
<div class="bismillah-wrap">
    <div class="bismillah-text">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ</div>
</div>
@endif

<x-audio-player :audio="$surah['audio']" />

<div class="ayat-list">
    @foreach($surah['ayat'] as $ayat)
        <x-ayat-card :ayat="$ayat" :surah="$surah" />
    @endforeach
</div>

@endsection

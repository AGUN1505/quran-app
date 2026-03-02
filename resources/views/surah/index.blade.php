@extends('layouts.app')
@section('title', "Al-Qur'an App")

@section('content')

<x-header-home />
<x-stats-bar />
<x-search-bar />

<div class="section-label">Semua Surat</div>

<div class="surah-list" id="surahList">
    @foreach($surahs as $surah)
        <x-surah-card :surah="$surah" />
    @endforeach
</div>

<div class="empty-state" id="emptyState">
    <div class="icon">🔍</div>
    <p>Surat tidak ditemukan.<br>Coba kata kunci lain.</p>
</div>

@endsection

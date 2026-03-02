<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class SurahController extends Controller
{
    public function index()
    {
        try {
            $response = Http::timeout(10)
                ->get('https://quran-api.santrikoding.com/api/surah');

            if (!$response->successful()) {
                abort(500, 'Gagal mengambil data.');
            }

            $surahs = Cache::remember('surah_list', 3600, function () {
                return Http::get('https://quran-api.santrikoding.com/api/surah')->json();
            });
            return view('surah.index', compact('surahs'));

        } catch (\Exception $e) {
            return view('error', ['message' => 'Tidak dapat terhubung ke server.']);
        }
    }

    public function show($nomor)
    {
        try {
            $response = Http::timeout(10)
                ->get("https://quran-api.santrikoding.com/api/surah/$nomor");

            if (!$response->successful()) {
                abort(404);
            }

            $surah = Cache::remember("surah_$nomor", 3600, function () use ($nomor) {
                return Http::get("https://quran-api.santrikoding.com/api/surah/$nomor")->json();
            });
            return view('surah.detail', compact('surah'));

        } catch (\Exception $e) {
            return view('error', ['message' => 'Gagal memuat surat.']);
        }
    }
}

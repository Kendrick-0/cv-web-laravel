<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 1. Import semua Model yang kita perlukan
use App\Models\Biodata;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;

class PageController extends Controller
{
    // Fungsi untuk Halaman Utama (Home)
    public function home()
    {
    $biodata = Biodata::first(); 
    $educations = Education::orderBy('end_year', 'desc')->get(); // <-- TAMBAHKAN BARIS INI

    return view('pages.home', [
        'biodata' => $biodata,
        'educations' => $educations // <-- Kirim juga data pendidikan
    ]);
    }

    // Fungsi untuk Halaman Riwayat Pendidikan
    public function education()
    {
        // Ambil semua data pendidikan, urutkan dari tahun terbaru
        $educations = Education::orderBy('end_year', 'desc')->get();
        
        // Kirim data ke view 'pages.education'
        return view('pages.education', ['educations' => $educations]);
    }

    // Fungsi untuk Halaman Riwayat Pengalaman
    public function experience()
    {
        // Ambil semua data pengalaman, urutkan dari tanggal terbaru
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        
        // Kirim data ke view 'pages.experience'
        return view('pages.experience', ['experiences' => $experiences]);
    }

    // Fungsi untuk Halaman Keahlian
    public function skills()
    {
        // Ambil semua data keahlian
        $skills = Skill::all();
        
        // Kirim data ke view 'pages.skills'
        return view('pages.skills', ['skills' => $skills]);
    }
}
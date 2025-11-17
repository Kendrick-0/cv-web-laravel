@extends('layouts.app')

@section('content')
    @if($biodata)
        {{-- Kontainer Utama dengan 2 Kolom --}}
        <div class="flex flex-col md:flex-row md:gap-8">

            {{-- === KOLOM KIRI (SIDEBAR) === --}}
            <div class="md:w-1/3 mb-8 md:mb-0">
                @if($biodata->photo_url)
                    <img src="{{ asset($biodata->photo_url) }}" alt="{{ $biodata->full_name }}" 
                         class="w-full h-auto object-cover border-4 border-blue-500 shadow-md rounded-lg">
                @else
                    <div class="w-full h-72 bg-gray-700 flex items-center justify-center text-gray-400 text-6xl font-bold border-4 border-blue-500 shadow-md rounded-lg">
                        {{ substr($biodata->full_name, 0, 1) }}
                    </div>
                @endif

                <div class="mt-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-100 border-b border-gray-700 pb-2">Info Kontak</h3>
                    <ul class="space-y-3 text-gray-300">
                        {{-- Ganti items-center menjadi items-start --}}
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.625a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                            <span>{{ $biodata->email }}</span>
                        </li>
                        {{-- Ganti items-center menjadi items-start --}}
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.99-.75-1.846-1.735-2.086l-4.118-.99a2.25 2.25 0 00-2.317.477l-.52.52a2.25 2.25 0 01-3.182 0l-1.96-1.96a2.25 2.25 0 010-3.182l.52-.52a2.25 2.25 0 00.477-2.317l-.99-4.118a2.25 2.25 0 00-2.086-1.735H4.5A2.25 2.25 0 002.25 6.75z" />
                            </svg>
                            <span>{{ $biodata->phone }}</span>
                        </li>
                        {{-- Ganti items-center menjadi items-start DAN w-5 h-5 menjadi w-6 h-6 --}}
                        <li class="flex items-start gap-3">
                            <svg class="w-12 h-12 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            <span>{{ $biodata->address }}</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-100 border-b border-gray-700 pb-2">Temukan Saya di</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">LinkedIn</a>
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">GitHub</a>
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">Portfolio</a>
                    </div>
                </div>
            </div>

            {{-- === KOLOM KANAN (KONTEN UTAMA) === --}}
            <div class="md:w-2/3">
                <h1 class="text-5xl font-bold text-white">{{ $biodata->full_name }}</h1>
                <h2 class="text-3xl text-blue-400 mt-2">{{ $biodata->job_title }}</h2>

                <div class="my-6">
                    <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition-colors">
                        {{-- Ikon Download --}}
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                        <span>Download CV (PDF)</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 my-8">
                    {{-- KARTU PENDIDIKAN --}}
                    {{-- Tambahkan min-h-32 (128px) --}}
                    <div class="bg-gray-700 p-4 rounded-lg text-center flex flex-col justify-center items-center h-full transition-transform hover:scale-105 min-h-32">
                        {{-- Ganti text-xl menjadi text-lg --}}
                        <span class="text-lg font-bold text-blue-400 block leading-tight mb-1">
                            @php
                                $latestEducation = $educations->first();
                            @endphp
                            @if($latestEducation)
                                {{ $latestEducation->school_name }}
                            @else
                                Pendidikan Terakhir
                            @endif
                        </span>
                        <span class="text-sm text-gray-400">Pendidikan</span>
                    </div>
                    
                    {{-- KARTU PENGALAMAN --}}
                    {{-- Tambahkan min-h-32 (128px) --}}
                    <div class="bg-gray-700 p-4 rounded-lg text-center flex flex-col justify-center items-center h-full transition-transform hover:scale-105 min-h-32">
                        <span class="text-2xl font-bold text-blue-400 block">3 Tahun</span>
                        <span class="text-gray-400">Pengalaman</span>
                    </div>
                    
                    {{-- KARTU KEAHLIAN --}}
                    {{-- Tambahkan min-h-32 (128px) --}}
                    <div class="bg-gray-700 p-4 rounded-lg text-center flex flex-col justify-center items-center h-full transition-transform hover:scale-105 min-h-32">
                        <span class="text-2xl font-bold text-blue-400 block">6+</span>
                        <span class="text-gray-400">Keahlian</span>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-2xl font-semibold mb-2 text-gray-100 border-b border-gray-700 pb-2">Ringkasan</h3>
                    <p class="text-gray-300 leading-relaxed text-lg">{{ $biodata->summary }}</p>
                </div>
            </div>
        </div>
    @else
        <p class="text-red-400">Data biodata tidak ditemukan. Silakan isi data di phpMyAdmin.</p>
    @endif
@endsection
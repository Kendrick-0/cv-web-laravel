@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 border-b border-gray-700 pb-2 text-white">Riwayat Pendidikan</h1> {{-- Ganti border & teks --}}

    <div class="space-y-6">
        @forelse($educations as $edu)
            {{-- Ganti warna hover, border, dan teks --}}
            <div class="border-l-4 border-blue-500 pl-4 transition-all hover:bg-gray-700 p-2">
                <h2 class="text-xl font-semibold text-white">{{ $edu->school_name }}</h2>
                <p class="text-gray-300 text-lg">{{ $edu->degree }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $edu->start_year }} - {{ $edu->end_year }}</p>
            </div>
        @empty
            <p class="text-gray-500">Belum ada data pendidikan.</p>
        @endforelse
    </div>
@endsection
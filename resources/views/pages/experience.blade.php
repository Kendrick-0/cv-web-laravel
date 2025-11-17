@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 border-b border-gray-700 pb-2 text-white">Pengalaman Kerja & Proyek</h1> {{-- Ganti border & teks --}}

    <div class="space-y-8">
        @forelse($experiences as $exp)
            {{-- Ganti warna border dan teks --}}
            <div class="border-l-4 border-green-500 pl-4">
                <h2 class="text-xl font-semibold text-white">{{ $exp->position }}</h2>
                <p class="font-medium text-gray-200 text-lg">{{ $exp->company_name }}</p>
                <p class="text-sm text-gray-500 mb-2">
                    {{ \Carbon\Carbon::parse($exp->start_date)->format('F Y') }} - 
                    {{ $exp->end_date ? \Carbon\Carbon::parse($exp->end_date)->format('F Y') : 'Sekarang' }}
                </p>
                <p class="text-gray-300 leading-relaxed">{{ $exp->description }}</p>
            </div>
        @empty
            <p class="text-gray-500">Belum ada data pengalaman.</p>
        @endforelse
    </div>
@endsection
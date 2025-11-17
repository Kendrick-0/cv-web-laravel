@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 border-b border-gray-700 pb-2 text-white">Keahlian</h1> {{-- Ganti border & teks --}}

    <h3 class="text-xl font-semibold mb-4 text-gray-100">Ringkasan Keahlian</h3> {{-- Ganti teks --}}
    <div class="flex flex-wrap gap-4 mb-8">
        @forelse($skills as $skill)
            {{-- Ganti warna badge --}}
            <div class="bg-blue-900 text-blue-200 px-4 py-2 rounded-full shadow-sm">
                <span class="font-medium">{{ $skill->skill_name }}</span>
            </div>
        @empty
            <p class="text-gray-500">Belum ada data keahlian.</p>
        @endforelse
    </div>

    <h3 class="text-xl font-semibold mb-4 text-gray-100">Visualisasi Level</h3> {{-- Ganti teks --}}
    <div class="w-full bg-gray-800 p-4 rounded-lg"> {{-- Beri background pada chart --}}
        <canvas id="skillsChart"></canvas>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        
        const skillsData = @json($skills);

        const labels = skillsData.map(skill => skill.skill_name);
        const data = skillsData.map(skill => parseInt(skill.level));

        const ctx = document.getElementById('skillsChart').getContext('2d');

        // Atur warna font default untuk Chart.js ke putih
        Chart.defaults.color = '#e5e7eb'; // text-gray-200

        const skillsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Level Keahlian',
                    data: data,
                    backgroundColor: 'rgba(96, 165, 250, 0.5)', // bg-blue-400
                    borderColor: 'rgba(96, 165, 250, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                indexAxis: 'y',
                scales: {
                    x: {
                        beginAtZero: true,
                        max: 100,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)' // Warna grid
                        },
                        ticks: {
                            color: '#e5e7eb' // Warna angka di sumbu
                        }
                    },
                    y: {
                        grid: {
                            display: false // Sembunyikan grid y-axis
                        },
                        ticks: {
                            color: '#e5e7eb' // Warna label skill
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                },
                responsive: true
            }
        });
    });
</script>
@endsection
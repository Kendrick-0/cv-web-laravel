<!DOCTYPE html>
<html lang="id" class="dark"> {{-- Tambahkan class="dark" di sini --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV RAFLI</title>
    
    @vite('resources/css/app.css')
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
{{-- Ganti warna background utama --}}
<body class="bg-gray-900 text-gray-300 font-sans">

    <div class="container mx-auto p-4 sm:p-6 max-w-4xl">
        
        {{-- Ganti warna navigasi --}}
        <nav class="bg-gray-800 shadow-lg rounded-lg p-4 mb-6 sticky top-4 z-10">
            <ul class="flex flex-wrap space-x-4 sm:space-x-6 justify-center">
                {{-- Ganti warna link --}}
                <li><a href="{{ route('home') }}" class="text-blue-400 hover:underline font-medium">Home/CV</a></li>
                <li><a href="{{ route('education') }}" class="text-blue-400 hover:underline font-medium">Pendidikan</a></li>
                <li><a href="{{ route('experience') }}" class="text-blue-400 hover:underline font-medium">Pengalaman</a></li>
                <li><a href="{{ route('skills') }}" class="text-blue-400 hover:underline font-medium">Keahlian</a></li>
            </ul>
        </nav>

        {{-- Ganti warna 'kartu' utama --}}
        <main class="bg-gray-800 shadow-lg rounded-lg p-6 sm:p-8">
            @yield('content')
        </main>
        
        <footer class="text-center text-gray-500 mt-8 mb-4">
            Dibuat dengan Laravel 10 & Tailwind CSS
        </footer>

    </div>
</body>
</html>
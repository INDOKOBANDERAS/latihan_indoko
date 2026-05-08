<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | Indoko Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white flex flex-col min-h-screen text-slate-900">

<script src="{{ asset('js/main.js') }}"></script>

    @include('partials.header')

    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-50 rounded-full blur-[120px] opacity-60"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-50 rounded-full blur-[120px] opacity-60"></div>
    </div>

    <main class="flex-grow flex items-center justify-center px-6">
        <div class="max-w-2xl text-center">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-50 text-blue-600 text-xs font-bold uppercase tracking-widest mb-8 border border-blue-100">
                Welcome to my space
            </div>
            
            <h1 class="text-6xl md:text-7xl font-extrabold mb-6 tracking-tight">
                Halo, Saya <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Indoko Banderas.</span>
            </h1>
            
            <p class="text-xl text-slate-500 mb-10 leading-relaxed">
                Mahasiswa Sistem Informasi yang hobi merangkai baris kode menjadi solusi digital yang bermakna. Senang membangun hal-hal baru dengan Laravel.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('profile') }}" class="w-full sm:w-auto bg-[#001f3f] text-white px-10 py-4 rounded-2xl font-bold shadow-2xl shadow-blue-200 hover:bg-blue-800 transition-all transform hover:-translate-y-1">
                    Lihat Profil & Portfolio
                </a>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Indoko Banderas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-[#f8fafc] flex flex-col min-h-screen text-slate-900">

    @include('partials.header')

    <div class="fixed top-0 left-0 w-full h-full -z-10 overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-100 rounded-full blur-[120px] opacity-50"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-indigo-100 rounded-full blur-[120px] opacity-50"></div>
    </div>

    <main class="flex-grow container mx-auto px-6 py-12">
        <div class="max-w-5xl mx-auto">
            
            <div class="glass-card rounded-[2.5rem] p-8 md:p-12 shadow-xl shadow-blue-900/5 flex flex-col md:flex-row items-center gap-10 mb-12">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[2rem] blur opacity-25"></div>
                    <div class="relative w-48 h-48 md:w-56 md:h-56">
                        <img src="{{ asset('img/profil.jpeg') }}" 
                             alt="Profile Indoko" 
                             class="w-full h-full object-cover rounded-[2rem] border-4 border-white shadow-inner">
                    </div>
                </div>

                <div class="flex-1 text-center md:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-[10px] font-bold uppercase tracking-wider mb-4 border border-blue-100">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                        </span>
                        Available for Projects
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-[#001f3f] to-blue-600">
                        Indoko Banderas
                    </h1>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed max-w-2xl">
                        Mahasiswa <span class="text-blue-600 font-semibold italic">Sistem Informasi</span> di Universitas Muhammadiyah Pontianak yang berfokus pada Modern Web Development.
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-3">
                        <span class="px-4 py-2 bg-white/50 rounded-xl text-xs font-medium border border-slate-200 shadow-sm">📍 Sambas, Kalimantan Barat</span>
                        <span class="px-4 py-2 bg-white/50 rounded-xl text-xs font-medium border border-slate-200 shadow-sm">📧 indokobanderas784@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="md:col-span-1 space-y-8">
                    <div class="glass-card p-8 rounded-[2rem] shadow-lg shadow-blue-900/5">
                        <h3 class="text-xl font-bold mb-6 italic underline decoration-blue-500 decoration-4">Tech Stack</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Laravel', 'PHP', 'Tailwind', 'MySQL', 'Git', 'JS'] as $skill)
                                <span class="px-3 py-1 bg-[#001f3f] text-white text-[10px] font-bold rounded-lg">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="glass-card p-8 rounded-[2rem] shadow-lg shadow-blue-900/5">
                        <h3 class="text-xl font-bold mb-6">Pendidikan</h3>
                        <div class="space-y-2">
                            <p class="font-bold text-slate-900 text-sm uppercase">UM Pontianak</p>
                            <p class="text-xs text-blue-600 font-semibold">S1 Sistem Informasi</p>
                            <p class="text-[10px] text-slate-400 italic">2024 - Sekarang</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-8">
                    <div class="glass-card p-8 rounded-[2rem] shadow-lg shadow-blue-900/5">
                        <h3 class="text-2xl font-bold mb-6">Tentang Saya</h3>
                        <div class="text-slate-600 leading-relaxed space-y-4">
                            <p>Berawal dari rasa penasaran bagaimana sebuah website bekerja, saya mulai mempelajari baris kode pertama saya di semester satu.</p>
                            <p class="italic border-l-4 border-blue-600 pl-4 bg-blue-50 py-3 rounded-r-xl">
                                "Tujuan saya bukan hanya menulis kode yang berfungsi, tapi kode yang rapi dan membantu banyak orang."
                            </p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-[#001f3f] to-blue-800 p-8 rounded-[2rem] text-white shadow-xl shadow-blue-200 transition-transform hover:scale-[1.01]">
                        <h3 class="text-xl font-bold mb-2">Tertarik Kolaborasi?</h3>
                        <p class="text-blue-100/80 mb-6 text-sm">Saya terbuka untuk proyek freelance atau diskusi teknologi.</p>
                        <a href="mailto:indokobanderas784@gmail.com" class="inline-block bg-white text-[#001f3f] px-8 py-3 rounded-xl font-bold hover:bg-cyan-50 transition-colors shadow-lg">
                            Kirim Pesan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
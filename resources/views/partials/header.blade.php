<nav class="bg-[#001f3f] sticky top-0 z-50 shadow-xl border-b border-blue-900/30">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-black tracking-tighter text-white underline decoration-cyan-400 decoration-4 underline-offset-4 hover:decoration-white transition-all">
            Indoko
        </a>
        
        <div class="flex items-center space-x-8">
            <a href="/" class="text-sm font-semibold text-blue-100 hover:text-cyan-400 transition-colors duration-300">
                Beranda
            </a>
            <a href="{{ route('profile') }}" class="text-sm font-semibold text-blue-100 hover:text-cyan-400 transition-colors duration-300">
                Profil
            </a>
            <span class="hidden md:inline-block px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-[10px] font-bold text-cyan-400 uppercase tracking-widest">
                Student
            </span>
        </div>
    </div>
</nav>
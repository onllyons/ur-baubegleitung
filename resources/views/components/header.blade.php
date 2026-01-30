<header class="relative z-50 bg-slate-100 shadow-sm">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex justify-center py-0">
            <a href="{{ url('/') }}" class="flex items-center">
                <img
                    src="{{ asset('images/bausachverstaendiger_logo_dark.png') }}"
                    alt="UR Baubegleitung Logo"
                    class="h-60 w-auto"
                >
            </a>
        </div>
    </div>
    <nav class="bg-[#5d7f95] text-white" aria-label="Hauptnavigation">
        <div class="mx-auto max-w-6xl px-6">
            <div class="flex flex-col divide-y divide-white/20 text-center text-xs font-semibold uppercase tracking-[0.18em] sm:text-sm md:flex-row md:divide-y-0 md:divide-x md:divide-white/25">
                <a href="{{ url('/') }}" class="flex-1 px-4 py-3 transition hover:bg-white/10">START</a>
                <a href="{{ url('/das-buero') }}" class="flex-1 px-4 py-3 transition hover:bg-white/10">DAS B&Uuml;RO</a>
                <a href="{{ url('/leistungen') }}" class="flex-1 px-4 py-3 transition hover:bg-white/10">LEISTUNGEN</a>
                <a href="{{ url('/gutachten') }}" class="flex-1 px-4 py-3 transition hover:bg-white/10">GUTACHTEN</a>
                <a href="{{ url('/kontakt') }}" class="flex-1 px-4 py-3 transition hover:bg-white/10">KONTAKT</a>
            </div>
        </div>
    </nav>
</header>

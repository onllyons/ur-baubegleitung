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
    <nav class="bg-[#393939] text-white" aria-label="Hauptnavigation">
        <div class="mx-auto max-w-6xl px-6">
            <div class="flex flex-col divide-y divide-white/20 text-center text-xs font-semibold uppercase tracking-[0.18em] sm:text-sm md:flex-row md:divide-y-0 md:divide-x md:divide-white/25">
                <div class="flex-1">
                    <a href="{{ url('/') }}" class="flex items-center justify-center px-4 py-3 transition hover:bg-white/10">START</a>
                </div>
                <div class="flex-1">
                    <a href="{{ url('/das-buero') }}" class="flex items-center justify-center px-4 py-3 transition hover:bg-white/10">DAS B&Uuml;RO</a>
                </div>
                <div class="relative flex-1 group">
                    <a href="{{ url('/leistungen') }}" class="flex items-center justify-center px-4 py-3 transition hover:bg-white/10">LEISTUNGEN</a>
                    <div class="absolute left-1/2 top-full mt-0 w-[220px] -translate-x-1/2 overflow-hidden rounded-none bg-[#393939] py-0 text-white shadow-lg opacity-0 pointer-events-none transition duration-200 group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto">
                        <a href="{{ url('/leistungen/bauschaeden') }}" class="block border-b border-white/20 px-6 py-4 text-sm font-semibold uppercase tracking-[0.16em] text-white transition hover:bg-white/10 whitespace-normal leading-snug break-words">
                            Hilfe bei Bausch&auml;den
                        </a>
                        <a href="{{ url('/leistungen/bauherrenunterstuetzung') }}" class="block border-b border-white/20 px-6 py-4 text-sm font-semibold uppercase tracking-[0.16em] text-white transition hover:bg-white/10 whitespace-normal leading-snug break-words">
                            Bauherren<wbr>unterst&uuml;tzung
                        </a>
                        <a href="{{ url('/leistungen/immobilien-an-verkauf') }}" class="block px-6 py-4 text-sm font-semibold uppercase tracking-[0.16em] text-white transition hover:bg-white/10 whitespace-normal leading-snug break-words">
                            Immobilien An- &amp; Verkauf
                        </a>
                    </div>
                </div>
                <div class="flex-1">
                    <a href="{{ url('/gutachten') }}" class="flex items-center justify-center px-4 py-3 transition hover:bg-white/10">GUTACHTEN</a>
                </div>
                <div class="flex-1">
                    <a href="{{ url('/holzrahmenbau') }}" class="flex items-center justify-center px-4 py-3 transition hover:bg-white/10">HOLZRAHMENBAU</a>
                </div>
                <div class="flex-1">
                    <a href="{{ url('/kontakt') }}" class="flex items-center justify-center px-4 py-3 transition hover:bg-white/10">KONTAKT</a>
                </div>
            </div>
        </div>
    </nav>
</header>

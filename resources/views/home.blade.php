@extends('layouts.app')

@section('title', 'UR Baubegleitung | Gepruefter Bausachverstaendiger')
@section('meta_description', 'Unabhaengige Baubegleitung, Gutachten und technische Expertise fuer Bauherren, Eigentuemern und Investoren in Deutschland.')

@section('content')
    <section id="start" class="scroll-mt-24">
        <div class="relative w-full" data-slider>
            <div class="relative h-[70vh] min-h-[750px] max-h-[820px] w-full overflow-hidden bg-slate-200">
                <img
                    src="{{ asset('images/carousel/1.jpg') }}"
                    alt="Baubegleitung auf einer Baustelle"
                    class="absolute inset-0 h-full w-full object-cover opacity-100 transition-opacity duration-700"
                    data-slide
                >
                <img
                    src="{{ asset('images/carousel/2.jpg') }}"
                    alt="Technische Begutachtung eines Wohngebaeudes"
                    class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-700"
                    data-slide
                    loading="lazy"
                >
                <img
                    src="{{ asset('images/carousel/3.jpg') }}"
                    alt="Baudokumentation und Qualitaetskontrolle"
                    class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-700"
                    data-slide
                    loading="lazy"
                >
                <img
                    src="{{ asset('images/carousel/4.jpg') }}"
                    alt="Sanierung und Bestandsaufnahme"
                    class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-700"
                    data-slide
                    loading="lazy"
                >
                <img
                    src="{{ asset('images/carousel/5.jpg') }}"
                    alt="Baukontrolle und Qualitaetssicherung"
                    class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-700"
                    data-slide
                    loading="lazy"
                >
                <div class="absolute inset-0 bg-slate-900/20"></div>
                <button
                    type="button"
                    class="group absolute left-4 top-1/2 z-20 -translate-y-1/2 rounded-full bg-white/90 p-3 shadow-md transition hover:bg-white"
                    data-prev
                    aria-label="Vorheriges Bild"
                >
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5 text-slate-700 transition group-hover:text-slate-900">
                        <path d="M15 6l-6 6 6 6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button
                    type="button"
                    class="group absolute right-4 top-1/2 z-20 -translate-y-1/2 rounded-full bg-white/90 p-3 shadow-md transition hover:bg-white"
                    data-next
                    aria-label="Naechstes Bild"
                >
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5 text-slate-700 transition group-hover:text-slate-900">
                        <path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="absolute bottom-6 left-1/2 z-20 flex -translate-x-1/2 gap-3" aria-label="Slider Navigation">
                    <button type="button" class="h-2.5 w-2.5 rounded-full bg-white shadow" data-dot aria-label="Slide 1"></button>
                    <button type="button" class="h-2.5 w-2.5 rounded-full bg-white/50 shadow" data-dot aria-label="Slide 2"></button>
                    <button type="button" class="h-2.5 w-2.5 rounded-full bg-white/50 shadow" data-dot aria-label="Slide 3"></button>
                    <button type="button" class="h-2.5 w-2.5 rounded-full bg-white/50 shadow" data-dot aria-label="Slide 4"></button>
                    <button type="button" class="h-2.5 w-2.5 rounded-full bg-white/50 shadow" data-dot aria-label="Slide 5"></button>
                </div>
            </div>
        </div>

        <div class="bg-slate-50">
            <div class="mx-auto max-w-6xl px-6 py-10">
                <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-gradient-to-br from-white via-slate-50 to-slate-100 px-6 py-10 text-center shadow-md sm:px-12">
                    <span class="absolute inset-x-0 top-0 h-1 bg-[#505152]"></span>
                    <h1 class="mt-4 text-2xl font-semibold text-slate-900 sm:text-3xl lg:text-4xl">
                        Gepr&uuml;fter Bausachverst&auml;ndiger und Gutachter
                    </h1>
                    <p class="mt-4 text-sm font-medium uppercase tracking-[0.22em] text-[#505152]">
                        Unabhaengig. Neutral. Nachvollziehbar dokumentiert.
                    </p>
                </div>
            </div>
        </div>

        <section>
            <div class="mx-auto max-w-6xl px-6 pb-6">
                <div class="grid gap-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:grid-cols-[1fr,2fr] md:items-center md:p-8">
                    <div class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                        Ihr Eigentum im Fokus
                    </div>
                    <div class="space-y-4 text-sm leading-relaxed text-slate-700 sm:text-base">
                        <p class="text-lg font-semibold text-slate-900">
                            Ob beim Neubau eines Hauses oder der Modernisierung der Altbauwohnung
                        </p>
                        <p>
                            Es geht um Ihr Eigentum und jedes Detail z&auml;hlt. Verlassen Sie sich gerne auf das geschulte Auge
                            und die Erfahrung eines Experten.
                        </p>
                    </div>
                </div>
            </div>
        </section>

      
    </section>

    <section class="py-12">
        <div class="mx-auto max-w-6xl px-6">
            <div class="grid gap-8 lg:grid-cols-[1.2fr,1fr]">
                <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-slate-200">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Profil</p>
                    <h2 class="mt-3 text-2xl font-semibold text-slate-900">Uwe Reemtsema</h2>
                    <p class="mt-2 text-sm text-slate-600">Gepr&uuml;fter Bausachverst&auml;ndiger f&uuml;r Sch&auml;den an Geb&auml;uden &amp; Wertermittlung</p>
                    <ul class="mt-6 space-y-3 text-sm text-slate-700">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 rounded-full bg-slate-400"></span>
                            Mitglied Deutsche Sachverst&auml;ndigen Gesellschaft
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 rounded-full bg-slate-400"></span>
                            Gepr&uuml;ft nach DESAG
                        </li>
                    </ul>
                </div>
                <div class="grid gap-6">
                    <div class="rounded-2xl bg-[#505152] p-6 text-white shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-white/80">Erfahrung</p>
                        <p class="mt-3 text-3xl font-semibold">20+ Jahre</p>
                        <p class="mt-2 text-sm text-white/80">Erfahrung im Bauwesen</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="das-buero"></div>

    <section id="leistungen" class="scroll-mt-24 bg-slate-100/60 py-16">
        <div class="mx-auto max-w-6xl px-6">
            <div class="flex flex-col gap-4">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Leistungen</p>
                <h2 class="text-2xl font-semibold text-slate-900">Spezialisierte Leistungen mit klaren Ergebnissen</h2>
                <p class="max-w-2xl text-sm leading-relaxed text-slate-600">
                    Wir liefern belastbare Entscheidungsgrundlagen. Transparent, nachvollziehbar und mit Fokus auf die technische Substanz.
                </p>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-700">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-6 w-6">
                            <path d="M4 20h16" />
                            <path d="M6 20V9l6-5 6 5v11" />
                            <path d="M10 14h4" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-slate-900">Bausch&auml;den</h3>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600">
                        Ursachenanalyse, Bewertung von Mangelumfang und Prioritaet, Sanierungsstrategie sowie Kostenabschaetzung.
                    </p>
                </div>
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-700">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-6 w-6">
                            <path d="M4 12h16" />
                            <path d="M12 4v16" />
                            <path d="M7 7h10v10H7z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-slate-900">Bauherren Unterst&uuml;tzung</h3>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600">
                        Begleitung von der Planung bis zur Abnahme, Qualitaetskontrollen auf der Baustelle und klare Protokolle.
                    </p>
                </div>
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-700">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-6 w-6">
                            <path d="M3 10l9-6 9 6" />
                            <path d="M5 10v10h14V10" />
                            <path d="M9 14h6" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-slate-900">Immobilien An- &amp; Verkauf</h3>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600">
                        Technische Zustandsbewertung, Risikoeinschaetzung und Priorisierung von Modernisierungsbedarf.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="gutachten" class="scroll-mt-24 py-16">
        <div class="mx-auto max-w-6xl px-6">
            <div class="grid gap-10 lg:grid-cols-2">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Gutachten</p>
                    <h2 class="mt-3 text-2xl font-semibold text-slate-900">Gutachten mit technischer Tiefe</h2>
                    <p class="mt-4 text-sm leading-relaxed text-slate-600">
                        Wir erstellen nachvollziehbare Gutachten fuer private, gewerbliche und oeffentliche Auftraggeber.
                        Grundlage sind Ortstermine, Messungen, Fotodokumentation und eine transparente Methodik.
                    </p>
                    <ul class="mt-6 space-y-3 text-sm text-slate-700">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 rounded-full bg-slate-400"></span>
                            Bauschadengutachten und Ursachenanalyse
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 rounded-full bg-slate-400"></span>
                            Beweissicherung und Dokumentation bei Streitfaellen
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 h-2 w-2 rounded-full bg-slate-400"></span>
                            Kaufberatung mit Risiko- und Sanierungspriorisierung
                        </li>
                    </ul>
                </div>
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Ablauf</p>
                    <h3 class="mt-3 text-lg font-semibold text-slate-900">Transparent von der Anfrage bis zum Bericht</h3>
                    <ol class="mt-5 list-decimal space-y-3 pl-4 text-sm text-slate-700">
                        <li>Vorabklaerung von Ziel und Umfang, Einsicht in vorhandene Unterlagen.</li>
                        <li>Ortstermin mit Messungen, Fotodokumentation und Gespraech vor Ort.</li>
                        <li>Analyse der Befunde, Bewertung nach anerkannten Regeln der Technik.</li>
                        <li>Gutachten mit klaren Empfehlungen, Prioritaeten und naechsten Schritten.</li>
                    </ol>
                    <p class="mt-6 text-sm text-slate-600">
                        Standardlieferzeit: 7 bis 10 Werktage nach Ortstermin, bei Bedarf auch schneller.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="kontakt" class="scroll-mt-24 bg-[#2b2b2b] py-16 text-white">
        <div class="mx-auto max-w-6xl px-6">
            <div class="grid gap-10 lg:grid-cols-2">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-white/75">Kontakt</p>
                    <h2 class="mt-3 text-2xl font-semibold text-white">Persoenlich erreichbar, klar strukturiert</h2>
                    <p class="mt-4 text-sm leading-relaxed text-white/85">
                        Teilen Sie uns Ihr Anliegen mit. Wir melden uns kurzfristig mit einer klaren Einschaetzung und einem Vorschlag fuer das weitere Vorgehen.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <a href="mailto:info@ur-baubegleitung.de" class="inline-flex items-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-[#505152] shadow-sm transition hover:bg-slate-100">
                            Anfrage per E-Mail
                        </a>
                        <a href="tel:+4915227752737" class="inline-flex items-center rounded-full border border-white/50 px-6 py-3 text-sm font-semibold text-white transition hover:border-white">
                            Direkt anrufen
                        </a>
                    </div>
                </div>
                <div class="rounded-2xl bg-white/15 p-6 ring-1 ring-white/15">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-white/75">Kontaktdaten</p>
                    <address class="mt-4 not-italic text-sm leading-relaxed text-white/85">
                        UR Baubegleitung<br>
                        Lynesch 1<br>
                        26826 Weener
                    </address>
                    <div class="mt-4 text-sm text-white/85">
                        <p>Tel. <a href="tel:+4915227752737" class="font-semibold text-white">01522 7752737</a></p>
                        <p>E-Mail <a href="mailto:info@ur-baubegleitung.de" class="font-semibold text-white">info@ur-baubegleitung.de</a></p>
                    </div>
                    <div class="mt-6 text-sm text-white/75">
                        <p>Telefonzeiten: Mo-Fr 08:00 - 18:00</p>
                        <p>Ortstermine nach Vereinbarung</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        (function () {
            var slider = document.querySelector('[data-slider]');
            if (!slider) return;

            var slides = Array.prototype.slice.call(slider.querySelectorAll('[data-slide]'));
            var dots = Array.prototype.slice.call(slider.querySelectorAll('[data-dot]'));
            var prevButton = slider.querySelector('[data-prev]');
            var nextButton = slider.querySelector('[data-next]');

            if (slides.length === 0) return;

            var index = 0;
            var hasDots = dots.length === slides.length;

            slides.forEach(function (slide, slideIndex) {
                slide.setAttribute('aria-hidden', slideIndex === index ? 'false' : 'true');
            });

            function setActive(nextIndex) {
                if (nextIndex < 0) {
                    nextIndex = slides.length - 1;
                }
                if (nextIndex >= slides.length) {
                    nextIndex = 0;
                }

                slides[index].classList.add('opacity-0');
                slides[index].classList.remove('opacity-100');
                slides[index].setAttribute('aria-hidden', 'true');
                if (hasDots) {
                    dots[index].classList.remove('bg-white');
                    dots[index].classList.add('bg-white/50');
                }

                index = nextIndex;

                slides[index].classList.remove('opacity-0');
                slides[index].classList.add('opacity-100');
                slides[index].setAttribute('aria-hidden', 'false');
                if (hasDots) {
                    dots[index].classList.add('bg-white');
                    dots[index].classList.remove('bg-white/50');
                }
            }

            if (hasDots) {
                dots.forEach(function (dot, dotIndex) {
                    dot.addEventListener('click', function () {
                        setActive(dotIndex);
                        resetTimer();
                    });
                });
            }

            if (prevButton) {
                prevButton.addEventListener('click', function () {
                    setActive(index - 1);
                    resetTimer();
                });
            }

            if (nextButton) {
                nextButton.addEventListener('click', function () {
                    setActive(index + 1);
                    resetTimer();
                });
            }

            var timer = null;

            function resetTimer() {
                if (timer) {
                    clearInterval(timer);
                }
                timer = setInterval(function () {
                    var nextIndex = (index + 1) % slides.length;
                    setActive(nextIndex);
                }, 6000);
            }

            resetTimer();
        })();
    </script>
@endpush

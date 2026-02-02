@extends('layouts.app')

@section('title', 'Das Buero | UR Baubegleitung')
@section('meta_description', 'Informationen ueber das Ingenieurbuero UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#5d7f95]">Das B&uuml;ro</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Das B&uuml;ro</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#5d7f95]"></div>
        </div>
    </section>

    <section class="bg-white">
        <br>
        <br>
        <div class="mx-auto mt-4 max-w-6xl px-6">
            <div class="relative">
                <img
                    src="{{ asset('images/buro.jpg') }}"
                    alt="Buero"
                    class="h-[420px] w-full rounded-2xl object-cover sm:h-[520px] lg:h-[640px]"
                    loading="lazy"
                >
                <a href="https://www.desag.de/zertifikat/uwereemtsema/" target="_blank" rel="noopener noreferrer" class="absolute -bottom-6 right-0">
                    <img
                        src="{{ asset('images/icons/desag.png') }}"
                        alt="DESAG"
                        class="h-20 w-auto rounded-md bg-white/90 p-2 shadow-lg transition hover:shadow-xl sm:h-24 lg:h-28"
                        loading="lazy"
                    >
                </a>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <div class="grid gap-10 lg:grid-cols-[1.05fr,1.45fr] lg:items-start">
                <div class="space-y-6">
                    <div>
                        <h2 class="text-2xl font-semibold text-slate-900">Uwe Reemtsema</h2>
                        <p class="mt-1 text-sm font-medium text-slate-600">Handwerksmeister nach Paragraph 8 HWO</p>
                    </div>
                    <ul class="space-y-3 text-sm text-slate-700">
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                            Gepr&uuml;fter Sachverst&auml;ndiger f&uuml;r Sch&auml;den am Bau nach DESAG
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                            Immobilienbewerter nach Bewertungsgesetz
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                            Gepr&uuml;fter Sachverst&auml;ndiger f&uuml;r Sch&auml;den an Geb&auml;uden
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                            Gutachter f&uuml;r Wertermittlung
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                            DESAG Zertifiziert und gepr&uuml;ft
                        </li>
                    </ul>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Kompetenz</p>
                        <p class="mt-3 text-lg font-semibold text-slate-900">
                            Ihr Sachverst&auml;ndiger f&uuml;r Sch&auml;den an Geb&auml;uden
                        </p>
                    </div>
                </div>
                <div class="space-y-6 text-sm leading-relaxed text-slate-700 sm:text-base">
                    <p>
                        Aufgrund meiner langj&auml;hrigen Praxiserfahrung als Bau- und Projektleiter in der Regionalen Baubranche
                        sowie meiner Zertifizierung als Sachverst&auml;ndiger f&uuml;r Sch&auml;den an Geb&auml;uden und
                        Immobilienbewerter erstelle ich f&uuml;r Sie fachlich fundierte Gutachten und Expertenberichte.
                        Diese decken m&ouml;gliche Geb&auml;udem&auml;ngel sowie Sch&auml;den an Wohnh&auml;usern,
                        Gewerbeimmobilien und Industriebauten ab.
                    </p>
                    <p>
                        Neben der Erstellung von Gutachten &uuml;bernehme ich f&uuml;r Sie auch die baubegleitende
                        Qualit&auml;tskontrolle. Auf Wunsch begleite und &uuml;berwache ich die Abnahme von Bauwerken
                        sowie die fachgerechte Reparatur und Nachbesserung eventuell vorhandener M&auml;ngel. So erhalten
                        Sie die Sicherheit, dass Ihr Bauprojekt nach anerkannten Regeln der Technik und im vorgesehenen
                        Qualit&auml;tsstandard umgesetzt wird.
                    </p>
                    <p>
                        Um Ihnen eine bestm&ouml;gliche Betreuung zu gew&auml;hrleisten, arbeite ich mit einem erfahrenen
                        Netzwerk aus Ingenieuren, Sachverst&auml;ndigen und Fachbetrieben zusammen. Dadurch k&ouml;nnen
                        wir f&uuml;r jedes Bau- oder Schadensszenario eine passgenaue, effiziente und nachhaltige
                        L&ouml;sung entwickeln.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

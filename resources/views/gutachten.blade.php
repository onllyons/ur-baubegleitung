@extends('layouts.app')

@section('title', 'Gutachten | UR Baubegleitung')
@section('meta_description', 'Gutachten und Sachverstaendigenleistungen der UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#505152]">Gutachten</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Gutachten</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#505152]"></div>
        </div>
    </section>

    <section class="bg-white">
        <img
            src="{{ asset('images/gutachten.jpg') }}"
            alt="Gutachten"
            class="h-[360px] w-full object-cover sm:h-[480px] lg:h-[560px]"
            loading="lazy"
        >
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <div class="grid gap-10 lg:grid-cols-[1.05fr,1.45fr] lg:items-start">
                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Erstellung von Gutachten</p>
                        <h2 class="mt-3 text-xl font-semibold text-slate-900">Sicherheit und Klarheit f&uuml;r Ihre Immobilie</h2>
                        <p class="mt-4 text-sm leading-relaxed text-slate-700">
                            Ein fundiertes Gutachten liefert Ihnen Sicherheit und Klarheit bei Bausch&auml;den, Streitf&auml;llen
                            oder wichtigen Entscheidungen rund um Ihre Immobilie.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#505152]">Gutachtenarten</p>
                        <ul class="mt-4 space-y-3 text-sm text-slate-700">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Schadensgutachten
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Beweissicherungsgutachten
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Immobilienbewertung
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Schriftliche sachverst&auml;ndige Stellungnahmen
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-8 text-sm leading-relaxed text-slate-700 sm:text-base">
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Schadensgutachten</h3>
                        <p>
                            Ein Schadensgutachten dokumentiert Art, Umfang und Ursache eines Schadens &ndash; beispielsweise bei
                            Wassersch&auml;den, Rissen im Mauerwerk, Schimmelbefall, Feuchtigkeitssch&auml;den oder Setzungsrissen.
                            Es zeigt auf, wie der Schaden entstanden ist, welche Folgen zu erwarten sind und welche Ma&szlig;nahmen
                            zur Beseitigung erforderlich sind. Solche Gutachten dienen als Grundlage f&uuml;r Sanierungen oder zur
                            Kl&auml;rung von Haftungsfragen mit Versicherungen und Handwerksfirmen.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Beweissicherungsgutachten</h3>
                        <p>
                            Ein Beweissicherungsgutachten ist besonders wichtig, wenn Sch&auml;den rechtssicher festgehalten werden
                            m&uuml;ssen &ndash; etwa bei laufenden Bauprojekten, zur Abwehr unberechtigter Anspr&uuml;che oder vor einem
                            m&ouml;glichen Rechtsstreit. Dabei werden Zustand, M&auml;ngel und Ursachen detailliert dokumentiert, um
                            eine belastbare Grundlage f&uuml;r Verhandlungen oder gerichtliche Verfahren zu schaffen.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Immobilienbewertung</h3>
                        <p>
                            Im Rahmen einer Immobilienbewertung ermittle ich den aktuellen Marktwert oder den Verkehrswert eines
                            Objekts. Dies ist unter anderem sinnvoll bei Kauf oder Verkauf einer Immobilie, Erbschaften, Scheidungen
                            oder Finanzierungsfragen. Dabei flie&szlig;en bautechnischer Zustand, Lage, Ausstattung und notwendige
                            Investitionen in die Bewertung ein.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Schriftliche, sachverst&auml;ndige Stellungnahmen</h3>
                        <p>
                            Nicht immer ist ein umfassendes Gutachten erforderlich. In vielen F&auml;llen reicht eine schriftliche
                            sachverst&auml;ndige Stellungnahme, die gezielt eine konkrete Frage beantwortet oder eine Einsch&auml;tzung
                            zu einem Schaden oder Mangel liefert. Diese Variante ist k&uuml;rzer, kosteng&uuml;nstiger und dennoch
                            fachlich fundiert.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-slate-900">Weitere Gutachtenarten</h3>
                        <ul class="mt-4 space-y-2 text-sm text-slate-700">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Baubegleitende Gutachten zur Qualit&auml;tskontrolle w&auml;hrend der Bauphase
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Abnahmegutachten zur Unterst&uuml;tzung bei der Bauabnahme
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Sanierungskonzepte bei komplexen Sch&auml;den wie Feuchtigkeit, Schimmel oder statischen Problemen
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 text-slate-700 shadow-sm">
                        <h3 class="text-lg font-semibold text-slate-900">Beratung als Alternative</h3>
                        <p class="mt-3">
                            Manchmal reicht auch schon eine sachverst&auml;ndige Beratung vor Ort, um Klarheit zu schaffen und die
                            n&auml;chsten Schritte sicher einzuleiten &ndash; ganz ohne umfassendes Gutachten. Gemeinsam kl&auml;ren wir,
                            welche Vorgehensweise in Ihrem Fall sinnvoll und wirtschaftlich ist.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

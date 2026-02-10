@extends('layouts.app')

@section('title', 'Immobilien An- & Verkauf | UR Baubegleitung')
@section('meta_description', 'Immobilien An- und Verkauf mit der UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#505152]">Leistungen</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Immobilien An- &amp; Verkauf</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#505152]"></div>
        </div>
    </section>

    <section class="bg-white">
        <img
            src="{{ asset('images/immobilien-an-verkauf.jpg') }}"
            alt="Immobilien An- und Verkauf"
            class="h-[360px] w-full object-cover sm:h-[480px] lg:h-[560px]"
            loading="lazy"
        >
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <div class="grid gap-10 lg:grid-cols-[1.05fr,1.45fr] lg:items-start">
                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Immobilienberatung</p>
                        <h2 class="mt-3 text-xl font-semibold text-slate-900">Kauf- und Verkaufsberatung einer Immobilie</h2>
                        <p class="mt-4 text-sm leading-relaxed text-slate-700">
                            Kauf- und Verkaufsberatung von Immobilien
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#505152]">Meine Leistungen</p>
                        <ul class="mt-4 space-y-3 text-sm text-slate-700">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Objektbesichtigung und Dokumentation des baulichen Zustands
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Einsch&auml;tzung von vorhandenen M&auml;ngeln und Sanierungsbedarf
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Neutrale Wertermittlung und Pr&uuml;fung der Angemessenheit des Kaufpreises nach Bewertungsgesetz
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Erstellung klarer Entscheidungsgrundlagen f&uuml;r K&auml;ufer und Verk&auml;ufer
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#505152]"></span>
                                Beratung zu Modernisierungs- und Instandhaltungskosten
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-6 text-sm leading-relaxed text-slate-700 sm:text-base">
                    <div class="space-y-4">
                        <p>
                            M&ouml;chten Sie ein Haus, eine Wohnung oder eine Gewerbeimmobilie erwerben oder verkaufen?
                            Dann empfiehlt es sich, vor einer Entscheidung eine neutrale, unabh&auml;ngige und fachkundige Beratung einzuholen.
                        </p>
                        <p>
                            Ich pr&uuml;fe f&uuml;r Sie den baulichen und technischen Zustand der Immobilie und bewerte, ob der aufgerufene
                            Kaufpreis angemessen ist. Dabei erhalten Sie eine realistische Einsch&auml;tzung &uuml;ber m&ouml;gliche
                            Investitionskosten, die f&uuml;r Modernisierung, Renovierung oder sogar f&uuml;r eine umfassende Sanierung
                            einzuplanen sind.
                        </p>
                        <p>
                            Gerade beim Immobilienkauf oder -verkauf gilt: Es gibt nach der Vertragsunterzeichnung kein
                            R&uuml;cktrittsrecht und keine Gew&auml;hrleistung. F&uuml;r Laien ist es oft kaum m&ouml;glich, Baum&auml;ngel
                            oder versteckte Sch&auml;den zuverl&auml;ssig zu erkennen. Ein unabh&auml;ngiger Sachverst&auml;ndiger
                            bietet Ihnen die notwendige Sicherheit und bewahrt Sie vor teuren Fehlentscheidungen.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 text-slate-700 shadow-sm">
                        <p class="text-sm font-semibold text-slate-900">
                            So erhalten Sie als K&auml;ufer die Sicherheit, dass Sie in eine werthaltige Immobilie investieren &ndash;
                            und als Verk&auml;ufer die M&ouml;glichkeit, Ihr Objekt professionell bewerten und marktgerecht pr&auml;sentieren zu lassen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

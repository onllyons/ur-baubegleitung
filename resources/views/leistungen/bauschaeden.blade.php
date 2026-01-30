@extends('layouts.app')

@section('title', 'Hilfe bei Bauschaeden | UR Baubegleitung')
@section('meta_description', 'Hilfe bei Bauschaeden durch die UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#5d7f95]">Leistungen</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Hilfe bei Bausch&auml;den</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#5d7f95]"></div>
        </div>
    </section>

    <section class="bg-white">
        <img
            src="https://static.wixstatic.com/media/46aad9_f3fda90f20b24d81be7612928be1d3a6~mv2.jpg/v1/fill/w_2520,h_908,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/Bild-Bauschaden.jpg"
            alt="Bauschaden"
            class="h-[360px] w-full object-cover sm:h-[480px] lg:h-[560px]"
            loading="lazy"
        >
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <div class="grid gap-10 lg:grid-cols-[1.05fr,1.45fr] lg:items-start">
                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Bausch&auml;den</p>
                        <h2 class="mt-3 text-xl font-semibold text-slate-900">Beweissicherung und Ursachenanalyse</h2>
                        <p class="mt-4 text-sm leading-relaxed text-slate-700">
                            Als Sachverst&auml;ndiger unterst&uuml;tze ich Sie mit folgenden Leistungen:
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#5d7f95]">Uebersicht</p>
                        <ul class="mt-4 space-y-3 text-sm text-slate-700">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Ursachenanalyse
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Erste Hilfe bei akuten Sch&auml;den
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Sanierungskonzepte und Umsetzungsbegleitung
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Rechtssichere Dokumentation / Beweissicherung
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-6 text-sm leading-relaxed text-slate-700 sm:text-base">
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Ursachenanalyse</h3>
                        <p>
                            Ich ermittle die tats&auml;chlichen Schadensursachen &ndash; ob Baum&auml;ngel, Planungsfehler,
                            Materialsch&auml;den oder unsachgem&auml;&szlig;e Ausf&uuml;hrung. Nur eine fundierte Analyse bildet
                            die Basis f&uuml;r eine erfolgreiche Sanierung und eventuelle Anspr&uuml;che gegen&uuml;ber Verursachern.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Erste Hilfe bei akuten Sch&auml;den</h3>
                        <p>
                            Bei akuten Problemen wie Wassersch&auml;den, Feuchtigkeitseintritten oder Schimmelbefall biete ich
                            schnelle Hilfestellung. Ziel ist es, Folgesch&auml;den zu verhindern und eine sichere Grundlage
                            f&uuml;r die weiteren Sanierungsma&szlig;nahmen zu schaffen.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Erstellung und Umsetzung von Sanierungskonzepten</h3>
                        <p>
                            Auf Basis der Analyse entwickle ich ma&szlig;geschneiderte Sanierungskonzepte, etwa f&uuml;r die
                            Trocknung nach Wassersch&auml;den oder die Beseitigung von Schimmel. Auf Wunsch begleite ich auch
                            die Umsetzung und kontrolliere die Arbeiten durch Fachbetriebe.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Rechtssichere Dokumentation / Beweissicherung</h3>
                        <p>
                            Alle Feststellungen werden nachvollziehbar und gerichtsfest dokumentiert. Dies ist entscheidend,
                            um Anspr&uuml;che gegen&uuml;ber Bauunternehmen, Versicherungen oder vor Gericht durchsetzen zu k&ouml;nnen.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 text-slate-700 shadow-sm">
                        <p class="text-sm font-semibold text-slate-900">
                            Mit meiner Expertise erhalten Sie nicht nur eine klare Einsch&auml;tzung &uuml;ber den Schaden,
                            sondern auch eine verl&auml;ssliche Grundlage f&uuml;r die Wiederherstellung und Ihre rechtliche Absicherung.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

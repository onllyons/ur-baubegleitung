@extends('layouts.app')

@section('title', 'Datenschutz | UR Baubegleitung')
@section('meta_description', 'Datenschutzinformationen der UR Baubegleitung.')

@section('content')
    <section class="py-16">
        <div class="mx-auto max-w-3xl px-6">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Datenschutz</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900">Datenschutzinformationen</h1>
            <p class="mt-4 text-sm leading-relaxed text-slate-600">
                Der Schutz Ihrer personenbezogenen Daten ist uns wichtig. Nachfolgend informieren wir Sie in kompakter Form
                ueber Art, Umfang und Zweck der Verarbeitung.
            </p>

            <div class="mt-10 space-y-8 text-sm leading-relaxed text-slate-700">
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Verantwortliche Stelle</h2>
                    <p class="mt-2">
                        Uwe Reemtsema Baubegleitung, Lynesch 1, 26826 Weener,
                        E-Mail: info@ur-baubegleitung.de, Tel. 01522 77 52 737
                    </p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Zwecke der Verarbeitung</h2>
                    <p class="mt-2">
                        Wir verarbeiten personenbezogene Daten zur Bearbeitung von Anfragen, zur Angebotserstellung
                        sowie zur Durchfuehrung unserer Leistungen und der Kommunikation mit Auftraggebern.
                    </p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Speicherdauer</h2>
                    <p class="mt-2">
                        Daten werden nur so lange gespeichert, wie es fuer die jeweiligen Zwecke erforderlich ist
                        oder gesetzliche Aufbewahrungspflichten bestehen.
                    </p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Ihre Rechte</h2>
                    <p class="mt-2">
                        Sie haben das Recht auf Auskunft, Berichtigung, Loeschung, Einschraenkung der Verarbeitung
                        sowie auf Datenuebertragbarkeit. Zudem steht Ihnen ein Beschwerderecht bei der Aufsichtsbehoerde zu.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Impressum | UR Baubegleitung')
@section('meta_description', 'Impressum der UR Baubegleitung.')

@section('content')
    <section class="py-16">
        <div class="mx-auto max-w-3xl px-6">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Impressum</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900">Impressum</h1>
            <div class="mt-8 space-y-6 text-sm leading-relaxed text-slate-700">
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Angaben gemaess &sect; 5 TMG</h2>
                    <p class="mt-2">
                        Uwe Reemtsema Baubegleitung<br>
                        Lynesch 1<br>
                        26826 Weener
                    </p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Vertreten durch</h2>
                    <p class="mt-2">Uwe Reemtsema</p>
                    <p class="mt-1 text-sm text-slate-700">Gepr&uuml;fter Bausachverst&auml;ndiger und Gutachter f&uuml;r Sch&auml;den an Geb&auml;uden und Wertermittlung</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Kontakt</h2>
                    <p class="mt-2">
                        Telefon: 01522 77 52 737<br>
                        E-Mail: info@ur-baubegleitung.de
                    </p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-slate-900">Umsatzsteuer</h2>
                    <p class="mt-2">USt-IdNr.: DE 123 456 789</p>
                </div>
            </div>
        </div>
    </section>
@endsection

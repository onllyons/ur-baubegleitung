@extends('layouts.app')

@section('title', 'Leistungen | UR Baubegleitung')
@section('meta_description', 'Leistungsuebersicht der UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#5d7f95]">Leistungen</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Leistungen</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#5d7f95]"></div>
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-6xl px-6 py-12">
            <div class="grid gap-10 text-center sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center gap-6">
                    <img src="{{ asset('images/icons/1.png') }}" alt="Bauschaeden" class="h-28 w-auto">
                    <h2 class="max-w-xs text-lg font-semibold text-[#5d7f95]">
                        Kompetente Hilfe bei Bausch&auml;den
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <img src="{{ asset('images/icons/2.png') }}" alt="Bauherrenunterstuetzung" class="h-28 w-auto">
                    <h2 class="max-w-xs text-lg font-semibold text-[#5d7f95]">
                        Bauherrin / Bauherren Unterst&uuml;tzung
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <img src="{{ asset('images/icons/3.png') }}" alt="Immobilien An- & Verkauf" class="h-28 w-auto">
                    <h2 class="max-w-xs text-lg font-semibold text-[#5d7f95]">
                        Hilfe bei Immobilien An- &amp; Verkauf
                    </h2>
                </div>
            </div>
        </div>
    </section>
@endsection

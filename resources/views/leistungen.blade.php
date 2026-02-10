@extends('layouts.app')

@section('title', 'Leistungen | UR Baubegleitung')
@section('meta_description', 'Leistungsuebersicht der UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#505152]">Leistungen</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Leistungen</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#505152]"></div>
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-6xl px-6 py-12">
            <div class="grid gap-10 text-center sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center gap-6">
                    <span
                        role="img"
                        aria-label="Bauschaeden"
                        class="h-28 w-28 bg-[#505152]"
                        style="-webkit-mask: url('{{ asset('images/icons/1.png') }}') no-repeat center / contain; mask: url('{{ asset('images/icons/1.png') }}') no-repeat center / contain;"
                    ></span>
                    <h2 class="max-w-xs text-lg font-semibold text-[#505152]">
                        Kompetente Hilfe bei Bausch&auml;den
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <span
                        role="img"
                        aria-label="Bauherrenunterstuetzung"
                        class="h-28 w-28 bg-[#505152]"
                        style="-webkit-mask: url('{{ asset('images/icons/2.png') }}') no-repeat center / contain; mask: url('{{ asset('images/icons/2.png') }}') no-repeat center / contain;"
                    ></span>
                    <h2 class="max-w-xs text-lg font-semibold text-[#505152]">
                        Bauherrin / Bauherren Unterst&uuml;tzung
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <span
                        role="img"
                        aria-label="Immobilien An- und Verkauf"
                        class="h-28 w-28 bg-[#505152]"
                        style="-webkit-mask: url('{{ asset('images/icons/3.png') }}') no-repeat center / contain; mask: url('{{ asset('images/icons/3.png') }}') no-repeat center / contain;"
                    ></span>
                    <h2 class="max-w-xs text-lg font-semibold text-[#505152]">
                        Hilfe bei Immobilien An- &amp; Verkauf
                    </h2>
                </div>
            </div>
        </div>
    </section>
@endsection

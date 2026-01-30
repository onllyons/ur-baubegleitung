@extends('layouts.app')

@section('title', 'Kontakt | UR Baubegleitung')
@section('meta_description', 'Kontakt zur UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50 bg-white">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#5d7f95]">Kontakt</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Kontakt</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#5d7f95]"></div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-6 pb-16">
            <form class="grid gap-6">
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="vorname" class="text-sm font-semibold text-slate-700">Vorname</label>
                        <input id="vorname" name="vorname" type="text" placeholder="Vorname" class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-100/70 px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:border-[#5d7f95] focus:outline-none focus:ring-2 focus:ring-[#5d7f95]/30">
                    </div>
                    <div>
                        <label for="nachname" class="text-sm font-semibold text-slate-700">Nachname</label>
                        <input id="nachname" name="nachname" type="text" placeholder="Nachname" class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-100/70 px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:border-[#5d7f95] focus:outline-none focus:ring-2 focus:ring-[#5d7f95]/30">
                    </div>
                </div>

                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="email" class="text-sm font-semibold text-slate-700">E-Mail-Adresse</label>
                        <input id="email" name="email" type="email" placeholder="z. B. beispiel@beispiel.com" class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-100/70 px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:border-[#5d7f95] focus:outline-none focus:ring-2 focus:ring-[#5d7f95]/30">
                    </div>
                    <div>
                        <label for="telefon" class="text-sm font-semibold text-slate-700">Telefonnummer</label>
                        <input id="telefon" name="telefon" type="tel" placeholder="Telefonnummer" class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-100/70 px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:border-[#5d7f95] focus:outline-none focus:ring-2 focus:ring-[#5d7f95]/30">
                    </div>
                </div>

                <div>
                    <label for="betreff" class="text-sm font-semibold text-slate-700">Betreff</label>
                    <input id="betreff" name="betreff" type="text" placeholder="z. B. Support" class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-100/70 px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:border-[#5d7f95] focus:outline-none focus:ring-2 focus:ring-[#5d7f95]/30">
                </div>

                <div>
                    <label for="nachricht" class="text-sm font-semibold text-slate-700">Nachricht</label>
                    <textarea id="nachricht" name="nachricht" rows="8" placeholder="Text hier eingeben" class="mt-2 w-full rounded-xl border border-slate-200 bg-slate-100/70 px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:border-[#5d7f95] focus:outline-none focus:ring-2 focus:ring-[#5d7f95]/30"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center rounded-xl bg-[#5d7f95] px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#516f82]">
                        Nachricht senden
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

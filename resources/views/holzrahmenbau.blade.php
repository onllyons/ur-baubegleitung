@extends('layouts.app')

@section('title', 'Holzrahmenbau | UR Baubegleitung')
@section('meta_description', 'Holzrahmenbau Beratung und Begleitung durch die UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#5d7f95]">Holzrahmenbau</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Holzrahmenbau</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#5d7f95]"></div>
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-6xl px-6 pb-16">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <button type="button" class="group" data-lightbox-src="{{ asset('images/holzrahmenbau/1.jpeg') }}">
                    <img src="{{ asset('images/holzrahmenbau/1.jpeg') }}" alt="Holzrahmenbau 1" class="h-64 w-full rounded-2xl object-cover shadow-sm transition group-hover:shadow-md">
                </button>
                <button type="button" class="group" data-lightbox-src="{{ asset('images/holzrahmenbau/2.jpeg') }}">
                    <img src="{{ asset('images/holzrahmenbau/2.jpeg') }}" alt="Holzrahmenbau 2" class="h-64 w-full rounded-2xl object-cover shadow-sm transition group-hover:shadow-md">
                </button>
                <button type="button" class="group" data-lightbox-src="{{ asset('images/holzrahmenbau/3.jpeg') }}">
                    <img src="{{ asset('images/holzrahmenbau/3.jpeg') }}" alt="Holzrahmenbau 3" class="h-64 w-full rounded-2xl object-cover shadow-sm transition group-hover:shadow-md">
                </button>
                <button type="button" class="group" data-lightbox-src="{{ asset('images/holzrahmenbau/4.jpeg') }}">
                    <img src="{{ asset('images/holzrahmenbau/4.jpeg') }}" alt="Holzrahmenbau 4" class="h-64 w-full rounded-2xl object-cover shadow-sm transition group-hover:shadow-md">
                </button>
                <button type="button" class="group" data-lightbox-src="{{ asset('images/holzrahmenbau/5.jpeg') }}">
                    <img src="{{ asset('images/holzrahmenbau/5.jpeg') }}" alt="Holzrahmenbau 5" class="h-64 w-full rounded-2xl object-cover shadow-sm transition group-hover:shadow-md">
                </button>
                <button type="button" class="group" data-lightbox-src="{{ asset('images/holzrahmenbau/6.jpeg') }}">
                    <img src="{{ asset('images/holzrahmenbau/6.jpeg') }}" alt="Holzrahmenbau 6" class="h-64 w-full rounded-2xl object-cover shadow-sm transition group-hover:shadow-md">
                </button>
                <button type="button" class="group" data-lightbox-src="{{ asset('images/holzrahmenbau/7.jpeg') }}">
                    <img src="{{ asset('images/holzrahmenbau/7.jpeg') }}" alt="Holzrahmenbau 7" class="h-64 w-full rounded-2xl object-cover shadow-sm transition group-hover:shadow-md">
                </button>
            </div>
        </div>
    </section>

    <div id="lightbox" class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 opacity-0 pointer-events-none transition duration-200">
        <button type="button" class="absolute inset-0" aria-label="Close image"></button>
        <div class="relative w-[80%] max-w-[520px]">
            <button type="button" class="absolute -top-4 -right-4 rounded-full bg-white text-slate-700 shadow-md transition hover:text-slate-900" data-lightbox-close aria-label="Close">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-8 w-8">
                    <path d="M6 6l12 12M18 6l-12 12" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <img src="" alt="Holzrahmenbau" class="h-auto w-full max-h-[55vh] object-contain rounded-lg shadow-2xl">
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function () {
            var lightbox = document.getElementById('lightbox');
            if (!lightbox) return;

            var lightboxImage = lightbox.querySelector('img');
            var closeButton = lightbox.querySelector('[data-lightbox-close]');
            var triggers = document.querySelectorAll('[data-lightbox-src]');

            function openLightbox(src) {
                lightboxImage.src = src;
                lightbox.classList.add('opacity-100', 'pointer-events-auto');
                lightbox.classList.remove('opacity-0', 'pointer-events-none');
                document.body.classList.add('overflow-hidden');
            }

            function closeLightbox() {
                lightbox.classList.add('opacity-0', 'pointer-events-none');
                lightbox.classList.remove('opacity-100', 'pointer-events-auto');
                lightboxImage.src = '';
                document.body.classList.remove('overflow-hidden');
            }

            triggers.forEach(function (trigger) {
                trigger.addEventListener('click', function () {
                    openLightbox(trigger.getAttribute('data-lightbox-src'));
                });
            });

            if (closeButton) {
                closeButton.addEventListener('click', function (event) {
                    event.stopPropagation();
                    closeLightbox();
                });
            }
            lightbox.addEventListener('click', closeLightbox);

            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    closeLightbox();
                }
            });
        })();
    </script>
@endpush

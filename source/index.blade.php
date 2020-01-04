@extends('_layouts.master')

@section('body')
    <div id="app" class="mx-auto min-h-screen pt-6 relative overflow-hidden">
        {{-- Background SVG --}}
        @include('_layouts.partials.background')

        {{-- Navbar --}}
        @include('_layouts.partials.nav')

        {{-- Main content --}}
        <main class="w-full mt-16">
            <h2 class="logo text-gray-700 text-center font-bold text-4xl sm:text-5xl">
                Bem-vindo à comunidade portuguesa de <span class="text-red-500 opacity-75">Laravel</span>
            </h2>

            <div class="flex flex-col md:flex-row mt-20 mb-20">
                {{-- Left-side CTA --}}
                @include('_layouts.partials.youtube-cta')

                {{-- Right-side CTA --}}
                @include('_layouts.partials.discord-cta')
            </div>
        </main>

    </div>
@endsection

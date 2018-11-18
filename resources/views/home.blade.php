@extends('layouts.master')

@section('content')
    <div id="app" class="mx-auto min-h-screen pt-6 relative overflow-hidden">
        {{-- Background SVG --}}
        @include('partials.background')

        {{-- Navbar --}}
        @include('partials.nav')

        {{-- Main content --}}
        <main class="w-5/6 mx-auto mt-16">
            <h2 class="logo text-grey-darkest text-center text-4xl sm:text-5xl">
                Bem-vindo à comunidade portuguesa de <span class="text-red-light opacity-75">Laravel</span>
            </h2>

            <div class="flex flex-col md:flex-row mt-20">
                {{-- Left-side CTA --}}
                @include('partials.youtube-cta')
                {{-- Right-side CTA --}}
                @include('partials.discord-cta')
            </div>
        </main>

    </div>

@endsection

<nav class="flex items-baseline justify-between px-6">

    {{-- Left-side | Brand --}}
    <h1 class="tracking-normal font-normal text-grey-darker">laravel.pt</h1>

    {{-- Right-side | Icons --}}
    <div class="flex">
        <a href="https://twitter.com/LaravelPortugal" target="_blank" class="text-grey-darker hover:text-blue-light">
            @include('partials.twitter')
        </a>

        <a href="https://laravelportugal.simplecast.fm/" target="_blank" class="text-grey-darker hover:text-blue-light">
            @include('partials.podcast')
        </a>

        <a href="https://github.com/laravel-portugal" target="_blank" class="text-grey-darker hover:text-blue-light">
            @include('partials.github')
        </a>
    </div>
</nav>

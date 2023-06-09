<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
    <title>{{env('APP_NAME')}}</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>
<body>
    {{-- HEADER --}}
    @include('partials._header')

    {{-- MAIN --}}
    <main>
        @yield('jumbotron')

        <section class="bg-dark">
            @yield('card-container')
        </section>

        <section>
            @yield('main-nav')
        </section>
    </main>

    {{-- FOOTER --}}
    @include('partials._footer')
</body>
</html>
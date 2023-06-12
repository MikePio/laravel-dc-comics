<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/img/laravel.png') }}" />

        <title>LARAVEL BOOTSTRAP TEMPLATE | @yield('title')</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

      @include('partials.header')

      <main style="min-height: calc(100vh - 90px - 150px);">
        @yield('content')
      </main>

      @include('partials.footer')

    </body>
</html>

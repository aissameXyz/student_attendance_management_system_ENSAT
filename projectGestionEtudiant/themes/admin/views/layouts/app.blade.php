<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ mix('js/app.js', 'themes/admin') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ mix('css/app.css', 'themes/admin') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="{{asset('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.min.css?h=cdc717bba6e32da6ffcf4cb1fb99a600')}}">
</head>
<body>
    <div id="app">
        @include('layouts.navigation')
        <main class="py-4">
            {{ $slot }}
        </main>
    </div>

    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/js/script.min.js?h=83c06fafd85b83be033796d2274feb61') }}"></script>
</body>
</html>

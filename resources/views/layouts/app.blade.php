<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700')}}">
        <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Roboto:300,400,700')}}">
        <link rel="stylesheet" href="{{assert('assets/fonts/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('path/to/font-awesome/css/font-awesome.min.css')}}">
        <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/Black-Navbar.css')}}">
        <link href="{{url('https://css.gg/laptop.css')}}" rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('assets/css/Feature-Section-MD.css')}}">
        <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/Navigation-with-Button.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/Sakae-Simple-Section.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/bs-init.js')}}"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}"></script>
    </body>
</html>

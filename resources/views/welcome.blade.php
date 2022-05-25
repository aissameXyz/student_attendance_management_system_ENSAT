<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
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
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: var(--bs-gray-200)">
        <div class="container"><a class="navbar-brand" href="#">Our logo</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Services</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Notes</a><a class="dropdown-item" href="#">Notes</a><a class="dropdown-item" href="#">Notes</a></div>
                    </li>
                </ul>
                <span class="navbar-text actions">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <ul><a class="btn btn-light action-button" role="button" href="{{ url('/dashboard') }}" style="background: var(--bs-red);">Dashboard</a></ul>
                            @else
                                <a class="btn btn-light action-button" role="button" href="{{ route('login') }}" style="background: var(--bs-red);">Log in</a>
                                @if (Route::has('register'))
                                    <a class="btn btn-light action-button" role="button" href="{{ route('register') }}" style="background: var(--bs-red);">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </span>
            </div>
        </div>
    </nav>

    <div style="margin: 50px;">
        <div class="text-center">
            <div class="text-center" data-aos="zoom-in" data-aos-duration="750">
                <h1 style="margin-bottom: 61px;color: var(--bs-red);">Who We Are</h1>
            </div>
            <div class="container sombra borderedondo" data-aos="fade">
                <div class="row">
                    <div class="col-md-4"><i class="fa fa-github border-dark" style="font-size: 35px;margin: 10px;"></i>
                        <div class="imgRedonda"><img class="imgpeque" src="assets/img/amechenoue.png"></div>
                        <h1 class="text-center" style="font-size: 32.52px;">Khalid Amechnoue</h1>
                        <p>Encadrant du project&nbsp;</p>
                        <div class="row">
                            <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);">More...</button></div>
                        </div>
                    </div>
                    <div class="col-md-4"><i class="fa fa-github border-dark" style="font-size: 35px;margin: 10px;"></i>
                        <div class="imgRedonda"><img class="imgpeque" src="assets/img/IMG-20211112-WA0022.jpg"></div>
                        <h1 class="text-center" style="font-size: 32.52px;">Achraf Khabar</h1>
                        <p>Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                        <div class="row">
                            <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                        </div>
                    </div>
                    <div class="col-md-4"><i class="fa fa-github border-dark" style="font-size: 35px;margin: 10px;"></i>
                        <div class="imgRedonda"><img class="imgpeque" src="assets/img/WhatsApp%20Image%202022-05-24%20at%2001.04.02%20(1).jpeg"></div>
                        <h1 class="text-center">Yassir Amami</h1>
                        <p>Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                        <div class="row">
                            <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                        </div>
                    </div>
                    <div class="col-md-4"><i class="fa fa-github border-dark" style="font-size: 35px;margin: 10px;"></i>
                        <div class="imgRedonda"><img class="imgpeque" src="assets/img/1625056698700.jpg"></div>
                        <h1 class="text-center" style="font-size: 32.52px;">aissam boukh</h1>
                        <p>Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                        <div class="row">
                            <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                        </div>
                    </div>
                    <div class="col-md-4"><i class="fa fa-github border-dark" style="font-size: 35px;margin: 10px;"></i>
                        <div class="imgRedonda"><img class="imgpeque" src="assets/img/WhatsApp%20Image%202022-05-24%20at%2010.48.07.jpeg"></div>
                        <h1 class="text-center" style="font-size: 32.52px;">Rached wass</h1>
                        <p>Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                        <div class="row">
                            <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                        </div>
                    </div>
                    <div class="col-md-4"><i class="fa fa-github border-dark" style="font-size: 35px;margin: 10px;"></i>
                        <div class="imgRedonda"><img class="imgpeque" src="assets/img/WhatsApp%20Image%202022-05-24%20at%2021.59.46.jpeg"></div>
                        <h1 class="text-center" style="font-size: 32.52px;">Bilal</h1>
                        <p>Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                        <div class="row">
                            <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="text-center">
                <h1 data-aos="fade-right" data-aos-duration="950" style="margin-bottom: 61px;color: var(--bs-red);">Our Services</h1>
            </div>
            <div class="row row-fitur">
                <div class="col-sm-4 col-md-4 waves-effect kolom-a">
                    <div class="fitur-a"><i class="gg-album" style="font-size:40px;color: var(--bs-red);"></i></div>
                    <div class="separator-fitur"></div>
                    <div>
                        <h4 class="heading-fitur">Secure </h4>
                        <p class="paragraf-fitur">Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 waves-effect kolom-b">
                    <div class="fitur-a"><i class="gg-printer" style="font-size: 56px;color: var(--bs-red);"></i></div>
                    <div class="separator-fitur"></div>
                    <div>
                        <h4 class="heading-fitur">Simple </h4>
                        <p class="paragraf-fitur">Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 waves-effect kolom-c">
                    <div class="fitur-a"><i class="gg-laptop" style="font-size: 56px;color: var(--bs-red);"></i></div>
                    <div class="separator-fitur"></div>
                    <div>
                        <h4 class="heading-fitur">Powerfull </h4>
                        <p class="paragraf-fitur">Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}"></script>

    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logoLAravel.png">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body class="antialiased">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: var(--bs-gray-200)">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="assets/img/hodori.png" width="100px">
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                @auth()
                    @if (\Auth::user()->role == 'Admin')
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Services</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('students')}}"> All Students </a>
                                <a class="dropdown-item" href="{{url('teacher')}}">All Teachers</a>
                                <a class="dropdown-item" href="{{url('Filieres')}}">Filieres</a>
                            </div>
                        </li>
                    @elseif(\Auth::user()->role == 'Admin')
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Services</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('students')}}"> All Students </a>
                                <a class="dropdown-item" href="{{url('teacher')}}">All Teachers</a>
                                <a class="dropdown-item" href="{{url('Filieres')}}">Filieres</a>
                            </div>
                        </li>
                    @endif
                @endauth
            </ul>
            <span class="navbar-text actions">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                              @auth
                            <ul>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="btn btn-light action-button" role="button" href="{{ url('/dashboard') }}" style="background: var(--bs-red);">Dashboard</a>
                                        <button class="btn btn-light action-button" type="submit"  style="background: var(--bs-red);">Log out</button>

                                    </form>
                                </ul>
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

<div class="text-center" data-aos="zoom-in" data-aos-duration="750">
    <h1 style="margin-bottom: 61px;color: var(--bs-red);">Qui Somme Nous?</h1>
</div>



<div style="margin: 50px;">
    <div class="text-center">
        <div class="container sombra borderedondo" data-aos="fade">
            <div class="row">
                <div class="col-md-4"><a href="https://github.com/aissameXyz" style="color: #dc3545"><i class="bi bi-github border-dark" style="font-size: 35px;margin: 10px; "></i></a>
                    <div class="imgRedonda"><img class="imgpeque" src="assets/img/1625056698700.jpg"></div>
                    <h1 class="text-center" style="font-size: 32.52px;">Boukhallad Aissame</h1>
                    <p>
                        étudiant ingénieure filière génie informatique à l'ENSA de Tanger.Data Enthusiast, et passionné par les technologies IT.Ce etait une chance d'acquérir plus d'expérience en tant que, manager projets, aussi m'avait aidé pour se développer techniquement et personnellement.<br></p>
                    <div class="row">
                        <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                    </div>
                </div>
                <div class="col-md-4"><a href="https://github.com/yassir63" style="color: #dc3545"><i class="bi bi-github border-dark" style="font-size: 35px;margin: 10px; "></i></a>
                    <div class="imgRedonda"><img class="imgpeque" src="assets/img/WhatsApp%20Image%202022-05-24%20at%2001.04.02%20(1).jpeg"></div>
                    <h1 class="text-center">Yassir Amami</h1>
                    <p>A Computer Science Engineering Student, passionate about all aspects of programming , you can find me by tapping my github link !<br></p>
                    <div class="row">
                        <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                    </div>
                </div>
                
                <div class="col-md-4"><a href="https://github.com/Ashraf-Khabar" style="color: #dc3545"><i class="bi bi-github border-dark" style="font-size: 35px;margin: 10px; "></i></a>
                    <div class="imgRedonda"><img class="imgpeque" src="assets/img/IMG-20211112-WA0022.jpg"></div>
                    <h1 class="text-center" style="font-size: 32.52px;">Achraf Khabar</h1>
                    <p>Moroccan software engineer student , interested in the IT world and science in general , especially mathematics , project-conception and problem-solving .<br></p>
                    <div class="row">
                        <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                    </div>
                </div>
                <div class="col-md-4"><a href="https://github.com/basssell" style="color: #dc3545"><i class="bi bi-github border-dark" style="font-size: 35px;margin: 10px; "></i></a>
                    <div class="imgRedonda"><img class="imgpeque" src="assets/img/WhatsApp%20Image%202022-05-24%20at%2010.48.07.jpeg"></div>
                    <h1 class="text-center" style="font-size: 32.52px;">Rached Wassim Bassel</h1>
                    <p>Élève ingénieur en première année cycle d'ingénierie informatique à l'Ecole nationale des sciences appliquées de TANGER.<br></p>
                    <div class="row">
                        <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                    </div>
                </div>
                <div class="col-md-4"><a href="https://github.com/amine0414" style="color: #dc3545"><i class="bi bi-github border-dark" style="font-size: 35px;margin: 10px; "></i></a>
                    <div class="imgRedonda"><img class="imgpeque" src="assets/img/amine.jpeg"></div>
                    <h1 class="text-center" style="font-size: 32.52px;">Amine Kamoun</h1>
                    <p>Actuellement étudiant en 2e année cycle d'ingénieur à Ensa Tanger après avoir passé un cycle préparatoire de 2 ans, passionne par le monde IT et la résolution des problèmes
                        la contribution à ce projet est une autre expérience parmi les expériences de mon parcour académique à Ensat.<br></p>
                    <div class="row">
                        <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                    </div>
                </div>
                <div class="col-md-4"><a href="https://github.com/bilal-mesaouri" style="color: #dc3545"><i class="bi bi-github border-dark" style="font-size: 35px;margin: 10px; "></i></a>
                    <div class="imgRedonda"><img class="imgpeque" src="assets/img/bilal.jpeg"></div>
                    <h1 class="text-center" style="font-size: 32.52px;">Mesaouri Deboun Bilal</h1>
                    <p>Je m'appelle Bilal Je suis un étudiant ingénieur dans Ensa Tanger 1ère année génie informatique membre du club Ensat presse, passionné par la programmation et le développement web.<br></p>
                    <div class="row">
                        <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);border-color: var(--bs-red);">More...</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin: 50px;">
    <div class="text-center">
        <div class="container sombra borderedondo " data-aos="fade">
            <div class="row">
                <div class="col-lr-1"><a href="" style="color: #dc3545"><i class="bi bi-github border-dark" style="font-size: 35px;margin: 10px; "></i></a>
                    <div class="imgRedonda">
                        <img class="imgpeque" src="assets/img/amechenoue.png">
                    </div>
                    <h1 class="text-center" style="font-size: 32.52px;">Khalid Amechnoue</h1>
                    <p>Encadrant du project&nbsp;</p>
                    <div class="row">
                        <div class="col text-end"><button class="btn" type="button" style="margin: 10px;background: var(--bs-red);color: rgb(255,255,255);">More...</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="text-center bg-gray-900 text-black">
  <div class="container px-6 pt-6">
    

    <div>
      <form action="">
        <div class="grid md:grid-cols-3 gird-cols-1 gap-4 flex justify-center items-center">
          <div class="md:ml-auto md:mb-6">
            <p class="">
              <strong>Demandez votre demo!</strong>
            </p>
          </div>

          <div class="md:mb-6">
            <input
              type="text"
              class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
              id="exampleFormControlInput1"
              placeholder="Email address"/>
          </div>

          <div class="md:mr-auto mb-8">
            <button type="submit" class="mb-4 inline-block px-6 py-2 border-2 border-grey text-black font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
              Demander
            </button>
          </div>
        </div>
      </form>
    </div>



    

  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
    Made with ❤️ © 2022, ENSAT
    <a class="text-black" >7odori</a>
  </div>
</footer>

<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}"></script>

</body>
</html>

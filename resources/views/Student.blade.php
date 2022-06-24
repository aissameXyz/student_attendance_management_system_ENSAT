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
                    @elseif(\Auth::user()->role == 'Student')
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Services</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('myInfo')}}">My Information</a>
                                <a class="dropdown-item" href="{{route('student_absence')}}">Absence</a>
                                <a class="dropdown-item" href="{{route('notifications')}}">Notifications</a>
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
                                        <button href="{{ url('/dashboard') }}" style="width:150px; height:40px; background-color:#ed009c; border-radius:20px; "><a  style="text-decoration:none; color:white; font-weight:bold;" >tableau de bord</a>
                                         </button>
                                         <button type="submit" style="width:135px; height:40px; background-color:#ed009c; border-radius:20px; color:white; font-weight:bold;"> Se Déconnecter
                                         </button>
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



<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}"></script>

</body>
</html>

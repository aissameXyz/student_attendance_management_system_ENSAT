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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased" style="background-color: var(--bs-gray-200)">
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
                @if (\Auth::user()->role == 'Admin')
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('students')}}"> All Students </a>
                            <a class="dropdown-item" href="{{url('teacher')}}">All Teachers</a>
                            <a class="dropdown-item" href="{{url('Filieres')}}">Filieres</a>
                        </div>
                    </li>
                @endif
                @if (\Auth::user()->role == 'Teacher')
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('Teacher/absence')}}">Absence</a>
                        </div>
                    </li>
                @endif
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




<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}"></script>

</body>
</html>


    <div class="flex-col flex">
        <form method="POST" action={{url("Teacher/absence/seanceStart/$seance_id")}}>
            @csrf
            <center>
                <button class="button-5" role="button">Start Seance</button>
            </center>
        </form>
        <form method="POST" action={{url("Teacher/absence/seanceEnd/$seance_id")}}>
            @csrf
            <center>
                <button class="button-5" role="button">End Seance</button>
            </center>
        </form>
    </div>

    <script type="text/javascript">
    </script>

    @if($absences)
    <div id="absence_sheet" class="py-12 w-full">
        <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            <table class="table">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th class="col">
                                                            First Name
                                                        </th>
                                                        <th>
                                                            Last Name
                                                        </th>
                                                        <th>
                                                            Code Apogée
                                                        </th>
                                                        <th>
                                                            Present
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <form class="px-4 py-2 btn" method="POST" action="{{ route('teacher.absence.store') }}">
                                                        @csrf
                                                        @foreach ($absences as $absence)
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div class="flex items-center">
                                                                        {{ $absence->student()->firstName }}
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div class="flex items-center">
                                                                        {{ $absence->student()->lastName }}
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div class="flex items-center">
                                                                        {{ $absence->student()->code_ap }}
                                                                    </div>
                                                                </td>
                                                                <td class="d-flex justify-content-center whitespace-nowrap">
                                                                    @if($absence->status=="present")
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input" name="absent[]" type="checkbox" value="{{ $absence->student()->id }}" checked id="flexSwitchCheckDefault">
                                                                        </div>
                                                                    @else
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input" name="absent[]" type="checkbox" value="{{ $absence->student()->id }}" id="flexSwitchCheckDefault">
                                                                        </div>
                                                                    @endif
                                                                    <input type="hidden" value="{{ $absence->student()->id }}" name="ids[]">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        <input type="hidden" value="{{ $seance_id }}" name="seance">
                                                        <center>
                                                            <button class="button-5" role="button">Submit</button>
                                                        </center>
                                                        <br><br>
                                                    </form>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif




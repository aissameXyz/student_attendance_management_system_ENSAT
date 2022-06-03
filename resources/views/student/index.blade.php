
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logoLAravel.png">
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
            <img src="assets/img/logoLAravel.png" width="80px">
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
<div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
    <center>
        <a class="btn action-button" style="background: var(--bs-red); color: white" role="button"  href="{{route('students.create')}}">
            Create Student
        </a>
    </center>
    <br><br>
    <div class="table-responsive table table-hover table-bordered results">
        <table class="table table-hover table-bordered">
            <thead class="bill-header cs">
            <tr>
                <th id="trs-hd-1" class="col-lg-1">First Name</th>
                <th id="trs-hd-2" class="col-lg-2">Last Name</th>
                <th id="trs-hd-3" class="col-lg-3">code_ap</th>
                <th id="trs-hd-4" class="col-lg-2">Edit</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($student as $st)
                <tr class="warning no-result">
                    <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                </tr>
                <tr>
                    <td>{{ $st->firstName }}</td>
                    <td>{{ $st->lastName }}</td>
                    <td>{{ $st->code_ap }}</td>
                    <td>
                        <form class="px-4 py-2" method="POST" action="{{ route('students.destroy', $st->id) }}" onsubmit="return confirm('Are you sure?');">
                            <a href="{{ url('students/'.$st->id.'/edit')}}" class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check" style="font-size: 15px;"></i></a>
                            @csrf
                            @method('DELETE')
                            <script>
                                function ConfirmDelete() {return confirm("Are you sure you want to delete?");}
                            </script>
                            <button Onclick="return ConfirmDelete();" class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}"></script>

</body>
</html>



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



<div class="container-sm">
    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('students.store') }}">
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Code Apogée</label>
            <input id="name" name="code_ap" type="text" class="form-control" required>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">First name </label>
            <input id="name" name="firstName" type="text" class="form-control" required>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Last name</label>
            <div class="input-group has-validation">
                <input id="name" name="lastName" type="text" class="form-control" aria-describedby="inputGroupPrepend" required>
            </div>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Admission Number </label>
            <input type="text" class="form-control" name="admissionNumber" id="validationCustom03" required>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Filiere</label>
            <select name="filiere_id" class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                @foreach($filiere as $fil)
                    <option value="{{$fil->id}}">{{$fil->Designation}}</option>
                @endforeach
            </select>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <a class="btn btn-danger" type="submit" href="{{ route('students.index') }}">Back</a>
            <button class="btn btn-danger" type="submit">Create</button>
        </div>
    </form>
</div>

<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js')}}"></script>

</body>
</html>






{{--<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Student
        </h2>
    </x-slot>

<style>
  body {



  background-size: cover; /* or contain depending on what you want */
  background-position: center center;
  background-repeat: no-repeat;
  text-align:center;
  margin:auto;
  padding:0;

}
</style>


<center>
<div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('students.index') }}" class="px-4 py-2 btn btn-success">Back</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST"class="px-4 py-2 btn " action="{{ route('students.store') }}">
                            @csrf
                            <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Code Apogée </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="code_ap" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> First name </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="firstName" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Last name </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="lastName" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Admission Number </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="admissionNumber" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>
                           <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Filiere </label>
                            <div class="mt-1">
                              <select name="filiere_Id" class="form-select btn btn-secondary px-6 ">


@foreach($filiere as $fil)
    <option value="{{$fil->id}}">{{$fil->Designation}}</option>
@endforeach
    </select>
                            </div>
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                          </div>




                          <div class="sm:col-span-6 pt-5">
                            <button type="submit" class="px-4 py-2 btn btn-success">Create</button>
                          </div>
                        </form>
                      </div>

                </div>

            </div>
        </div>
    </div>

</center>


</x-app-layout>--}}

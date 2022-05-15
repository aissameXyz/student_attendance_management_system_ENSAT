<nav class="bg-white shadow-sm navbar navbar-expand-md navbar-light">
    <div class="container">
        <a style="font-family: 'ui-sans-serif'" class="navbar-brand" href="{{ url('/') }}">
            GESTIAN D'ABSANCE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="mr-auto navbar-nav">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul style="align-items: center" class="ml-auto navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login as student') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login as admin') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('teacher.login') }}">{{ __('Login as teacher') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ admin()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('admin.add_student') }}" >Add student</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Filières
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.ginf') }}">
                                GINF
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.gstr') }}"
                               >
                                GSTR
                            </a>
                            <a class="dropdown-item" href=""
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                GSEA
                            </a>
                            <a class="dropdown-item" href=""
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                GIL
                            </a>
                            <a class="dropdown-item" href=""
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                G3EI
                            </a>

                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

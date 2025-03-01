{{-- <style>
    /* Initially, the arrow faces down */
    .arrow {
        display: inline-block;
        transition: transform 0.3s ease;
        /* Smooth transition for rotation */
    }

    /* On hover, rotate the arrow to face up */
    #dropdown:hover .arrow {
        transform: rotate(-180deg);
        /* Rotating the arrow to face upwards */
    }

    /* Make sure the dropdown toggles behave properly with Bootstrap */
    .nav-item .dropdown-menu {
        display: none;
    }

    .nav-item:hover .dropdown-menu {
        display: block;
    }

    /* Initially, the dropdown arrow faces down */
    .nav-item .dropdown-toggle::after {
        content: "";
        /* Downward triangle (Bootstrap default arrow) */
        font-size: 16px;
        /* Adjust the arrow size */
        transition: transform 0.3s ease;
        /* Smooth transition for the rotation */
    }

    /* On hover over the entire li (including the dropdown menu), rotate the arrow to face up */
    .nav-item:hover .dropdown-toggle::after {
        transform: rotate(-180deg);
        /* Rotate the arrow to face up */
    }

    /* Ensure the dropdown menu appears when hovering over the li */
    .nav-item:hover .dropdown-menu {
        display: block;
        /* Show the dropdown menu when hovering over the li */
    }

    /* Optionally, hide the dropdown menu by default */
    .nav-item .dropdown-menu {
        display: none;
        /* Hide the dropdown menu by default */
    }
</style>
<style>
    /* Ensure Bootstrap dropdown works */
    .dropdown-menu {
        display: none;
    }

    .dropdown-menu.show {
        display: block;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light header bg-white sticky-top">
    <div class="container-fluid">

        <!-- Logo on the left -->

        <div class="main-logo-div">
            <a href="{{ route('std.index') }}" class="navbar-brand">
                <img src="{{ asset('assets/images/skillsider_logo.png') }}" alt="Logo" class="main-logo h-50">
            </a>
        </div>

        <!-- Custom toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            ☰ <!-- Default icon, will be updated by JavaScript -->
        </button>

        <!-- Centered navigation menu with dropdown and login button -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link main-nav-link" href="{{ route('std.index') }}">Home</a>
                </li>
                <li class="nav-item dropdown px-lg-1" id="dropdown">
                    <a class="nav-link dropdown-toggle main-nav-link text-dark" id="navbarDropdown" role="button">
                        Courses <span class="arrow"></span>
                    </a>

                    <div class="" aria-labelledby="navbarDropdown" id="dropdown-menu"
                        style="display: none;
          background-color: white;
padding: 1rem;
position :absolute;
list-style: none;
margin: 0;
min-width: 250px;
border-radius: 4px;
box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px">
                        <a class="dropdown-item main-nav-link px-0" href="{{ route('free.courses') }}">Free Courses</a>
                        <hr class="my-0 mb-1" />
                        <a class="dropdown-item main-nav-link px-0" href="{{ route('premium.course') }}">Premium
                            Courses</a>
                        <hr class="my-0 mb-1" />
                        <a class="dropdown-item main-nav-link px-0"
                            href="{{env('APP_URL')}}home#section-new-course">Educational Bundles</a>
                        <hr class="my-0 mb-1" />
                    </div>
                </li>



                <li class="nav-item px-lg-1">
                    <a class="nav-link main-nav-link" href="{{ route('about.us') }}">About</a>
                </li>
                <li class="nav-item px-lg-1">
                    <a class="nav-link main-nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item px-lg-1">
                    <a class="nav-link main-nav-link" href="{{ route('student.review') }}">Reviews</a>
                </li>
                <li class="nav-item px-lg-1">
                    <a class="nav-link main-nav-link" href="{{ route('contact.us') }}">Contact</a>
                </li>


            </ul>
            <!-- Login button - visible on small screens -->
            <div class="d-flex d-lg-none">
                @if (Auth::check())
                    <a href="{{ route('login.page') }}">
                        <button class="btn btn-outline-primary main__btn rounded-pill "
                            type="button">Dashboard</button>
                    </a>
                @else
                    <a href="{{ route('login.page') }}">
                        <button class="btn btn-outline-primary main__btn rounded-pill " type="button">Login /
                            SignUp</button>
                    </a>
                @endif
            </div>
        </div>

        <!-- Login button on the right - visible on larger screens -->
        <div class="d-none d-lg-flex">

            @if (Auth::check())
                <a href="{{ route('login.page') }}">
                    <button class="btn btn-outline-primary main__btn rounded-pill nav-btn-2"
                        type="button">Dashboard</button>
                </a>
            @else
                <a href="{{ route('login.page') }}">
                    <button class="btn btn-outline-primary main__btn rounded-pill nav-btn-2" type="button">Login /
                        SignUp</button>
                </a>
            @endif
        </div>

    </div>
</nav>
<span class="btn-mobile-nav" style="display:none!important">
</span> --}}
@php 
    $all_packages = App\Models\Packages::all();
@endphp
<!-- Site Header - Start
      ================================================== -->
<header class="site_header site_header_1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-lg-3 col-5">
                <div class="site_logo">
                    <a class="site_link" href="{{ route('home.page') }}">
                        <img src="{{ asset('studens-asset/assets/images/logo/mian-logo.webp') }}"
                            alt="Collab - Online Learning Platform" width="245">
                    </a>
                </div>
            </div>
            <div class="col col-lg-6 col-2">
                <nav class="main_menu navbar navbar-expand-lg">
                    <div class="main_menu_inner collapse navbar-collapse justify-content-center"
                        id="main_menu_dropdown">
                        <ul class="main_menu_list unordered_list_center">
                            {{-- <li class="dropdown active">
                                <a class="nav-link" href="#" id="home_submenu" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                <ul class="dropdown-menu" aria-labelledby="home_submenu">
                                    <li class="active"><a href="index.html">Home V.1</a></li>
                                    <li><a href="index_2.html">Home V.2</a></li>
                                </ul>
                            </li> --}}
                            <li><a class="nav-link active" href="{{ route('home.page') }}">Home</a></li>
                            <li><a class="nav-link" href="{{ route('all.courses') }}">Courses</a></li>
                            <li class="dropdown">
                                <a class="nav-link" href="#" id="service_submenu" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Packages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="service_submenu">
                                    @foreach ($all_packages as $package)
                                    <li class="dropdown">
                                        <a class="nav-link" href="{{ route('single.package', ['id' => $package->id]) }}" id="courses_layout_submenu" 
                                           aria-expanded="false">
                                           {{$package->package_title}}
                                        </a>
                                    </li>
                                    @endforeach
                                 

                                </ul>
                            </li>
                            <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                            <li><a class="nav-link" href="{{ route('contact.us') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col col-lg-3 col-5">
                <ul class="header_btns_group unordered_list_end">
                    <li>
                        <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="far fa-bars"></i>
                        </button>
                    </li>
                    @if (Auth::check())
                        <a class="btn btn_dark" href="{{ route('login.page') }}">
                            <span>
                                <small>Dashboard</small>
                                <small>Dashboard</small>
                            </span>
                        </a>
                    @else
                    <li>
                        <a class="btn border_dark" href="{{ route('login.page') }}">
                            <span>
                                <small>Login</small>
                                <small>Login</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn_dark" href="{{ route('user.register', ['pckg' => 0]) }}">
                            <span>
                                <small>Sign Up</small>
                                <small>Sign Up</small>
                            </span>
                        </a>
                    </li>
                    @endif
                  
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Site Header - End
      ================================================== -->

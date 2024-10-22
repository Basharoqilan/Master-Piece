<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Health Coach - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

<style>
  .navbar-nav {
    display: flex;
    align-items: center; /* Aligns items in the center vertically */
}

.navbar-nav .nav-item {
    margin-left: 15px; /* Adds spacing between the items */
}

.nav-btn {
    background-color: #007bff;
    color: white;
    border-radius: 25px;
    padding: 10px 20px;
    text-align: center;
    margin-left: 10px;
}

@media (max-width: 768px) {
    .navbar-nav {
        flex-direction: column; /* Stacks nav items vertically on smaller screens */
        align-items: flex-start;
    }
}
</style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Health<span>wellness<i class="fa fa-leaf"></i></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item {{ Request::is('pricing') ? 'active' : '' }}">
                        <a href="{{ url('/pricing') }}" class="nav-link">Plans</a>
                    </li>

                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                        <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item {{ Request::is('products') ? 'active' : '' }}">
                        <a href="{{ url('/products') }}" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('Calculator') ? 'active' : '' }}">
                        <a href="#" class="nav-link dropdown-toggle" id="calculatorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Calculator
                        </a>
                        <div class="dropdown-menu" aria-labelledby="calculatorDropdown">
                            <a class="dropdown-item" href="{{ route('diabetes_assessment.show') }}">Diabetes Calculator</a>
                            <a class="dropdown-item" href="{{ route('bmi.form') }}">BMI Calculator</a>
                            <a class="dropdown-item" href="{{ route('body_weight_planner.showForm') }}">Body Weight Planner</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('cart.index') }}" class="nav-link">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="badge badge-danger" id="cart-count">
                                {{ session()->has('cart') && isset(session('cart')['totalQuantity']) ? session('cart')['totalQuantity'] : 0 }}
                            </span>
                        </a>
                    </li>


                    @auth
                    @if(Auth::user()->role_id == 2)
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ asset('profile') }}">Profile</a>
                                <a class="dropdown-item" href="{{ asset('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ asset('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a href="{{ asset('login') }}" class="btn btn-primary px-4 py-2 m-1 nav-btn" style="border-radius: 25px;">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('register') }}" class="btn btn-primary px-4 py-2 m-1 nav-btn" style="border-radius: 25px;">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

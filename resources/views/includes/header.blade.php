<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="{{asset('/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('/css/nucleo-svg.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
  <link id="pagestyle" href="{{asset('/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <style>
    .mx-4 {
      margin-right: 0rem !important;
      margin-left:0rem !important;
  }
  .table>*>*
  {
    border-bottom-width: 3px;
  }

  </style>
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ url('/dashboard') }}" style="text-decoration: none; font-size: 24px; font-weight: bold;">
            <span style="color: #EC407A;">Healthwellness <i class="fa fa-leaf" aria-hidden="true" style="color: #EC407A ;"></i></span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Dashboard Link -->
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active bg-gradient-primary' : '' }}" href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Dashboard</span>
                </a>
            </li>
            <!-- Users Link -->
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('users') ? 'active bg-gradient-primary' : '' }}" href="{{ route('users') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('price_plans') ? 'active bg-gradient-primary' : '' }}" href="{{ route('price_plans') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Plans</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('PlanDetails') ? 'active bg-gradient-primary' : '' }}" href="{{ route('PlanDetails') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">description</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Plan Details</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('product') ? 'active bg-gradient-primary' : '' }}" href="{{ route('product') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">shopping_cart</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Product</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('category') ? 'active bg-gradient-primary' : '' }}" href="{{ route('category') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('discount') ? 'active bg-gradient-primary' : '' }}" href="{{ route('discount') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">local_offer</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Discount</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('subscription') ? 'active bg-gradient-primary' : '' }}" href="{{ route('subscription') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">subscriptions</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Subscription</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('order') ? 'active bg-gradient-primary' : '' }}" href="{{ route('order') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt</i>
                    </div>
                    <span class="nav-link-text ms-1" style="font-size: 18px">Order</span>
                </a>
            </li>
        </ul>
    </div>
</aside>


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" >
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true" style="background-color: #dddddd69;">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h6 class="font-weight-bolder mb-0" style="font-size: 30px">{{ session('user_name') }}</h6>
            </nav>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item d-flex align-items-center ms-3">
                    <a href="{{asset('admin-profile')}}" class="nav-link text-body font-weight-bold px-0">
                        <i class="material-icons" style="font-size: 40px; color: #6c757d; margin-right: 10px; margin-bottom: 15px;">person</i>
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a href="{{ route('login') }}" class="nav-link text-body font-weight-bold px-0">
                        <button type="submit" class="btn bg-gradient-primary" style="font-size: 15px">Logout</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

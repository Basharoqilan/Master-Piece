<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In - Material Dashboard 2</title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
    <style>
        .input-group-outline {
            position: relative;
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }
        .input-group-outline label {
            margin-bottom: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            color: #344767;
        }
        .input-group-outline input {
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            font-size: 1rem;
        }
       
    </style>
</head>

<body class="bg-gray-200">
    <main class="main-content mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('{{asset ('images/1.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                </div>
                            </div>
                            <div class="card-body">

                              <form role="form" action="{{ route('login') }}" method="POST">
                                @csrf

                                <!-- Email Input -->
                                <div class="input-group-outline mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value=" ">
                                    @error('email')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password Input -->
                                <div class="input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                    @error('password')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- General Error for Authentication Failure -->
                                @if (session('error'))
                                    <div class="text-danger mt-1">{{ session('error') }}</div>
                                @endif

                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                </div>
                            </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </div>
                            <div style = "text-align: center">
                                <p class="mb-2 text-sm mx-auto">
                                    Go to home page :
                                    <a href="{{ route('home') }}" class="text-primary text-gradient font-weight-bold">Home</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

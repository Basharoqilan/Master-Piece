<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="{{ asset('css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
    <style>
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-label {
            width: 100px; /* Adjust this width as needed */
            margin-right: 15px;
            font-weight: bold;
        }

        .form-control {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }
        .btn-primary, .btn.bg-gradient-primary {
            box-shadow: 0 3px 3px 0 rgba(16,137, 255, 1);
        }
        .bg-gradient-primary {
            background-image: linear-gradient(195deg, #1089ff 0%, #1089ff 100%);
        }
        .btn-primary:hover, .btn.bg-gradient-primary:hover {
            background-color: #1089ff;
            border-color: #1089ff;
            box-shadow: 0 14px 26px -12px rgba(16,137, 255, 1);
        }
        .text-gradient.text-primary {
            background-image: linear-gradient(195deg, #1089ff, #1089ff);
        }
    </style>
</head>

<body>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                style="background-image: url('{{ asset('images/1.jpg') }}'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Sign Up</h4>
                                    <p class="mb-0">Enter your information to register</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        @error('name')
                                        <div class="text-danger mb-3">{{ $message }}</div>
                                        @enderror

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="">
                                        </div>
                                        @error('email')
                                        <div class="text-danger mb-3">{{ $message }}</div>
                                        @enderror

                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" value="">
                                        </div>
                                        @error('phone')
                                        <div class="text-danger mb-3">{{ $message }}</div>
                                        @enderror

                                        <div class="form-group">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" name="location" value="">
                                        </div>
                                        @error('location')
                                        <div class="text-danger mb-3">{{ $message }}</div>
                                        @enderror

                                        <div class="form-group">
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        @error('password')
                                        <div class="text-danger mb-3">The password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one number, and one special character</div>
                                        @enderror

                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        @error('password_confirmation')
                                        <div class="text-danger mb-3">{{ $message }}</div>
                                        @enderror

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-2 text-sm mx-auto">
                                        Already have an account?
                                        <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>

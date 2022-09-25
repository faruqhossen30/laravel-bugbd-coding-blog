<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Sign Up | Jobcy - Job Listing Template | Themesdesign</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('frontend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('frontend') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!--Custom Css-->

</head>

<body>
    <!--start page Loader -->
    <div id="preloader">
        <div id="status">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!--end page Loader -->

    <!-- Begin page -->
    <div>


        <div class="main-content">

            <div class="page-content">

                <!-- START SIGN-UP -->
                <section class="bg-auth">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <div class="card auth-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 text-center">
                                            <div class="card-body p-4">
                                                <a href="index.html">
                                                    <img src="{{ asset('frontend') }}/assets/images/logo-light.png"
                                                        alt="" class="logo-light">
                                                    <img src="{{ asset('frontend') }}/assets/images/logo-dark.png"
                                                        alt="" class="logo-dark">
                                                </a>
                                                <div class="mt-5">
                                                    <img src="{{ asset('frontend') }}/assets/images/auth/sign-up.png"
                                                        alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="auth-content card-body p-5 text-white">
                                                <div class="w-100">
                                                    <div class="text-center">
                                                        <h5>Let's Get Started</h5>
                                                        <p class="text-white-70">Sign Up and get access to all the
                                                            features of Jobcy</p>
                                                    </div>
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="usernameInput"
                                                                class="form-label">Username</label>
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        </div>
                                                        {{-- end user name --}}
                                                        <div class="mb-3">
                                                            <label for="EmailInput" class="form-label">Email</label>
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        {{-- end email  --}}
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        {{-- password end  --}}
                                                        <div class="mb-3">
                                                            <label for="password-confirm " class="form-label">Confim
                                                                Password</label>
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        </div>

                                                        {{-- confirm password  --}}

                                                        <div class="mb-4">
                                                            <div class="form-check"><input class="form-check-input"
                                                                    type="checkbox" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">I
                                                                    agree to the <a href="javascript:void(0)"
                                                                        class="text-white text-decoration-underline">Terms
                                                                        and conditions</a></label>
                                                            </div>
                                                        </div>
                                                        {{-- terms and condiction end  --}}
                                                        <div class="text-center">
                                                            <button type="submit"
                                                                class="btn btn-white btn-hover w-100">Sign Up</buttom>
                                                        </div>
                                                    </form>
                                                    <div class="mt-3 text-center">
                                                        <p class="mb-0">Already a member ? <a href="{{url('/login')}}"
                                                                class="fw-medium text-white text-decoration-underline">
                                                                Sign In </a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end auth-box-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </section>
                <!-- END SIGN-UP -->

            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Style switcher -->
    <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
        <div>
            <h6>Select your color</h6>
            <ul class="pattern list-unstyled mb-0">
                <li>
                    <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                </li>
                <li>
                    <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li>
            </ul>
            <div class="mt-3">
                <h6>Light/dark Layout</h6>
                <div class="text-center mt-3">
                    <!-- light-dark mode -->
                    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                        <i class="uil uil-brightness mode-dark mx-auto"></i>
                        <i class="uil uil-moon mode-light"></i>
                    </a>
                    <!-- END light-dark Mode -->
                </div>
            </div>
        </div>
        <div class="bottom d-none d-md-block">
            <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
        </div>
    </div>
    <!-- end switcher-->

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('frontend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


    <!-- Switcher Js -->
    <script src="{{ asset('frontend') }}/assets/js/pages/switcher.init.js"></script>

</body>

</html>

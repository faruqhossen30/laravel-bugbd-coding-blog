@extends('frontend.layouts.app')

@section('main-contant')
<br><br><br>
        <!-- Begin page -->
        <div>
            <div class="main-content">
                <div class="page-content">
                    <!-- START RESET-PASSWORD -->
                    <section class="bg-auth">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12">
                                    <div class="card auth-box">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-lg-6 text-center">
                                                <div class="card-body p-4">
                                                    <a href="index.html">
                                                        <img src="{{ asset('frontend') }}/assets/images/logo-light.png" alt="" class="logo-light">
                                                        <img src="{{ asset('frontend') }}/assets/images/logo-dark.png" alt="" class="logo-dark">
                                                    </a>
                                                    <div class="mt-5">
                                                        <img src="{{ asset('frontend') }}/assets/images/auth/reset-password.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="auth-content card-body p-5 h-100 text-white card">
                                                    <div class="text-center mb-4">
                                                        <h5>{{ __('Verify Your Email Address') }}</h5>
                                                        {{-- <p class="text-white-50">Reset your password with Jobcy.</p> --}}
                                                    </div>
                                        
                                                        <div class="card-body">
                                                            @if (session('resent'))
                                                                <div class="alert alert-success" role="alert">
                                                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                                                </div>
                                                            @endif
                                        
                                                            {{ __('Before proceeding, please check your email for a verification link.') }}
                                                            {{ __('If you did not receive the email') }}, <br><br>
                                                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                                                @csrf
                                                                <button type="submit" class="btn btn-primary">
                                                                    {{ __('click here to request another') }}</button>
                                                            </form>
                                                        </div> 
                                                    </div>
                                                    <!-- end form -->
                
                                                    {{-- <div class="mt-5 text-center text-white-50">
                                                        <p>Remembered It ? <a href="sign-in.html" class="fw-medium text-white text-decoration-underline"> Go to Login </a></p>
                                                    </div> --}}
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end auth-box-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END RESET-PASSWORD -->
                    
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
            <div class="bottom d-none d-md-block" >
                <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
            </div>
        </div>
        <!-- end switcher-->
    
@endsection
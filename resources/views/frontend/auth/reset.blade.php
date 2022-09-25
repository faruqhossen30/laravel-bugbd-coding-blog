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
                            <div class="card auth-box ">
                                <div class="row g-0 align-items-center ">
                                    <div class="col-lg-6 text-center">
                                        <div class="card-body p-4">
                                            <a href="index.html">
                                                <img src="{{ asset('frontend') }}/assets/images/logo-light.png" alt=""
                                                    class="logo-light">
                                                <img src="{{ asset('frontend') }}/assets/images/logo-dark.png" alt=""
                                                    class="logo-dark">
                                            </a>
                                            <div class="mt-5">
                                                <img src="{{ asset('frontend') }}/assets/images/auth/reset-password.png"
                                                    alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 ">
                                        <div class="card ">
                                            <div class="card-header">{{ __('Reset Password') }}</div>

                                            <div class="card-body">
                                                <form method="POST" action="{{ route('password.update') }}">
                                                    @csrf

                                                    <input type="hidden" name="token" value="{{ $token }}">

                                                    <div class="row mb-3">
                                                        <label for="email"
                                                            class="col-md-4 col-form-label text-md-end">{{ __('Email
                                                            Address') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ $email ?? old('email') }}"
                                                                required autocomplete="email" autofocus>

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="password"
                                                            class="col-md-4 col-form-label text-md-end">{{
                                                            __('Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                name="password" required autocomplete="new-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="password-confirm"
                                                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                                            Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password"
                                                                class="form-control" name="password_confirmation"
                                                                required autocomplete="new-password">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Reset Password') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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
    <!-- END RESET-PASSWORD -->

</div>
<!-- End Page-content -->

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

@endsection
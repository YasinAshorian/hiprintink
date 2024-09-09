<!DOCTYPE html>


<html lang="fa" class="light-style layout-wide  customizer-hide" dir="rtl" data-theme="theme-default">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>@yield('title')</title>


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets_panel/img/logo/img.png') }}"/>

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/boxicons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/fontawesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/flag-icons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/css/rtl/core.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/css/rtl/theme-default.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets_panel/css/demo.css') }}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/libs/typeahead-js/typeahead.css') }}"/>
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/libs/@form-validation/form-validation.css') }}"/>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/css/pages/page-auth.css') }}">

    <!-- Helpers -->
    <script src="{{ asset('assets_panel/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets_panel/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('assets_panel/js/config.js') }}"></script>

</head>

<body>


<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">


            <div>

                <!-- Login -->
                <div class="card">
                    <div class="card-body">

                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif

                        @if(Session::has('error'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif


                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="#" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo"></span>

                                <span class="app-brand-text demo text-body fw-bold py-3">
                        <img src="{{ asset('assets/img/hi-logo.jpg') }}" alt="learn craft" width="200">
                    </span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        <form class="mb-3" action="#" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label"></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="" autofocus>
                                @error('username') <span
                                    class="fs-12 bold text-danger"> {{ $message }} </span> @enderror
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                           aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('password') <span
                                    class="fs-12 bold text-danger"> {{ $message }} </span> @enderror

                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">ورود</button>
                            </div>
                        </form>


                    </div>
                </div>
                <!-- /Login -->

            </div>


        </div>
    </div>
</div>


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="{{ asset('assets_panel/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/js/menu.js') }}"></script>


<!-- Vendors JS -->
<script src="{{ asset('assets_panel/vendor/libs/@form-validation/popular.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/@form-validation/auto-focus.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets_panel/js/main.js') }}"></script>


<!-- Page JS -->
<script src="{{ asset('assets_panel/js/pages-auth.js') }}"></script>

</body>

</html>

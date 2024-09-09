<!DOCTYPE html>


<html lang="fa" class="light-style layout-wide  customizer-hide" dir="rtl" data-theme="theme-default" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo/learncraft.png') }}" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_panel/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/libs/@form-validation/form-validation.css') }}" />

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
                {{ $slot }}
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

<!-- beautify ignore:end -->


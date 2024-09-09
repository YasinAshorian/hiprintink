<!DOCTYPE html>


<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="rtl"
      data-theme="theme-default" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>@yield('title')</title>


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/hi-logo.jpg') }}"/>

    <!-- Icons -->

    <link  href="{{ asset('assets_panel/vendor/fonts/boxicons.css') }}" rel="stylesheet" />
    <link  href="{{ asset('assets_panel/vendor/fonts/fontawesome.css') }}" rel="stylesheet" />
    <link  href="{{ asset('assets_panel/vendor/fonts/flag-icons.css') }}" rel="stylesheet" />

    <!-- Core CSS -->
    <link  href="{{ asset('assets_panel/vendor/css/rtl/core.css') }}" rel="stylesheet" />
    <link  href="{{ asset('assets_panel/vendor/css/rtl/theme-default.css') }}" rel="stylesheet" />
    <link  href="{{ asset('assets_panel/css/demo.css') }}" rel="stylesheet" />

    <!-- Fonts -->
    <link  href="{{ asset('assets/css/variables.css') }}" rel="stylesheet" />


    <!-- Vendors CSS -->
    <link  href="{{ asset('assets_panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link  href="{{ asset('assets_panel/vendor/libs/typeahead-js/typeahead.css') }}" rel="stylesheet" />
    <link  href="{{ asset('assets_panel/vendor/libs/apex-charts/apex-charts.css') }}" rel="stylesheet" />
    <link  href="{{ asset('assets_panel/vendor/css/pages/app-chat.css') }}" rel="stylesheet" />
    <!-- Page CSS -->


    <!-- Helpers -->
    <script src="{{ asset('assets_panel/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('assets_panel/js/config.js') }}"></script>

    <livewire:styles/>

</head>

<body>


<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">


        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


            <div class="app-brand demo "><a href="#" class="app-brand-link"><span class="app-brand-logo demo"></span>

                    <span class="app-brand-text demo menu-text fw-bold m-5">Hi-Print</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>


            <ul class="menu-inner py-5">
                <!-- Dashboards -->


                <li class="menu-item ">
                    <a href="" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                        <div class="text-truncate" >داشبورد</div>
                    </a>
                </li>



                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div class="text-truncate" >کاربران ادمین </div>
                    </a>
                </li>


                <li class="menu-item ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-server"></i>
                        <div class="text-truncate" >سرویس ها </div>
                    </a>

                    <ul class="menu-sub">

                        <li class="menu-item ">
                            <a href="#" class="menu-link">
                                <div class="text-truncate" > لیست سرویس ها </div>
                            </a>
                        </li>

                        <li class="menu-item ">
                            <a href="#" class="menu-link">
                                <div class="text-truncate">ویژگی های سرویس  </div>
                            </a>
                        </li>

                        <li class="menu-item ">
                            <a href="#" class="menu-link">
                                <div class="text-truncate">پلن های سرویس  </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="menu-item ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-window-open"></i>
                        <div class="text-truncate" >نمونه کار ها   </div>
                    </a>

                    <ul class="menu-sub">

                        <li class="menu-item ">
                            <a href="#" class="menu-link">
                                <div class="text-truncate">لیست نمونه کار ها  </div>
                            </a>
                        </li>

                        <li class="menu-item ">
                            <a href="#" class="menu-link">
                                <div class="text-truncate">لیست دسته بندی ها </div>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="menu-item ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user-circle"></i>
                        <div class="text-truncate" >مشتریان  </div>
                    </a>

                    <ul class="menu-sub">

                        <li class="menu-item ">
                            <a href="#" class="menu-link">
                                <div class="text-truncate" >لیست مشتریان  </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="menu-item ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-calculator"></i>
                        <div class="text-truncate" >فاکتور ها   </div>
                    </a>

                    <ul class="menu-sub">

                        <li class="menu-item ">
                            <a href="#" class="menu-link">
                                <div class="text-truncate">لیست فاکتور ها </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-chart"></i>
                        <div class="text-truncate" >گزارشات  </div>
                    </a>

                    <ul class="menu-sub">

                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div class="text-truncate">گزارشات </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="menu-item ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-book"></i>
                        <div class="text-truncate" >مقالات  </div>
                    </a>

                    <ul class="menu-sub">

                        <li class="menu-item ">
                            <a href="" class="menu-link">
                                <div class="text-truncate">لیست مقالات </div>
                            </a>
                        </li>

                        <li class="menu-item ">
                            <a href="#" class="menu-link">
                                <div class="text-truncate">لیست دسته بندی ها </div>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>


        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->


            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">


                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>


                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0)">
                                <i class="bx bx-search bx-sm"></i>
                                <span class="d-none d-md-inline-block text-muted">جست و جو </span>
                            </a>
                        </div>
                    </div>
                    <!-- /Search -->


                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ asset('assets_panel/img/avatars/1.png') }}" alt
                                         class="w-px-40 h-auto rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ asset('assets_panel/img/avatars/1.png') }}" alt
                                                         class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-medium d-block">یاسین عاشوریان </span>
                                                <small class="text-muted">ادمین </small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">پروفایل من </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">تنظیمات </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">
                                        <span class="d-flex align-items-center align-middle">
                                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                          <span class="flex-grow-1 align-middle">کیف پول </span>
                                          <span class="h-px-20 px-2">1200,0000</span> <span>ریال </span>
                                        </span>
                                    </a>
                                </li>

                                <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" >
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">خروج </span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <!--/ User -->


                    </ul>
                </div>


                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper  d-none">
                    <input type="text" class="form-control search-input container-xxl border-0" placeholder="جست و جو ..."
                           aria-label="جست و جو ...">
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>


            </nav>


            <!-- / Navbar -->


            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->

                {{ $slot }}

                <!-- / Content -->



                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets_panel/vendor/js/core.js -->

<script src="{{ asset('assets_panel/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('assets_panel/vendor/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets_panel/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets_panel/js/main.js') }}"></script>


<!-- Page JS -->
<script src="{{ asset('assets_panel/js/dashboards-analytics.js') }}"></script>

<livewire:scripts/>

<script>

    document.addEventListener('DOMContentLoaded', () => {
        console.log('load content')
    })

    document.addEventListener('livewire:navigated', () => {


    })

</script>

@yield('js')
</body>

</html>

<!-- beautify ignore:end -->



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="هایپرینت تامین کننده جوهر و مواد مصرفی از کشور چین و سرتاسر دنیا">
    <meta name="keywords" content="هایپرینت تامین کننده جوهر و مواد مصرفی از کشور چین و سرتاسر دنیا">
    <meta name="author" content="هایپرینت تامین کننده جوهر و مواد مصرفی از کشور چین و سرتاسر دنیا">

    <meta property="og:title" content="هایپرینت تامین کننده جوهر و مواد مصرفی از کشور چین و سرتاسر دنیا">
    <meta property="og:description" content="هایپرینت تامین کننده جوهر و مواد مصرفی از کشور چین و سرتاسر دنیا">


    <title> @yield('title')</title>

    <link href="{{ asset('assets/img/hi-logo.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/hi-logo.jpg') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    @livewireStyles

</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
             <img src="{{ asset('assets/img/hi-logo.jpg') }}" alt="hi-logo" >
        </a>

        <nav id="navmenu" class="navmenu" dir="rtl">
            <ul>
                <li><a href="#" class="active">صفحه اصلی </a></li>
                <li><a href="#">درباره ما</a></li>
                <li class="dropdown"><a href="#"><span>جوهر UV LED</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">جوهر UV برای EPSON</a></li>
                        <li><a href="#">جوهر UV برای Konica /...</a></li>
                        <li><a href="#">جوهر UV برای GH2220</a></li>
                        <li><a href="#">تمیزکننده UV</a></li>
                        <li><a href="#">روکش UV</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>جوهر نساجی</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">جوهر DTG</a></li>
                        <li><a href="#">جوهر تصعیدی</a></li>
                        <li><a href="#">جوهر واکنشی</a></li>
                        <li><a href="#">جوهر اسیدی</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>جوهر اکو/حلال </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">جوهر حلال</a></li>
                        <li><a href="#">جوهر اکو-حلال</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>راهکارهای چاپ </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">جوهر لاتکس </a></li>
                        <li><a href="#">چاپگر دیجیتال</a></li>
                        <li><a href="#">دستگاه پرس حرارتی</a></li>
                        <li><a href="#">راهکار چاپ DTG (مستقیم روی لباس)</a></li>
                        <li><a href="#">راهکار چاپ کاغذ دیواری</a></li>
                        <li><a href="#">کاغذ تصعید</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>لوازم یدکی </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">لوازم یدکی خودروهای سواری</a></li>
                        <li><a href="#">لوازم یدکی خودروهای کلاسیک</a></li>
                        <li><a href="#">لوازم یدکی موتور سیکلت</a></li>
                    </ul>
                </li>
                <li><a href="#">اخبار</a></li>
                <li><a href="#">وبلاگ</a></li>
                <li><a href="#">ارتباط با ما</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

<main class="main" dir="rtl">

   {{ $slot }}

</main>

<footer id="footer" class="footer light-background">

    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <h4>Address</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p></p>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <h4>Contact</h4>
                    <p>
                        <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
                        <strong>Email:</strong> <span>info@example.com</span><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                    <h4>Opening Hours</h4>
                    <p>
                        <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
                        <strong>Sunday</strong>: <span>Closed</span>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4>Follow Us</h4>
                <div class="social-links d-flex">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">EstateAgency</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@livewireScripts

</body>
</html>

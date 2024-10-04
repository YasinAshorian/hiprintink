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
    <link href="{{ asset('assets/css/main.css?v=1.0.1') }}" rel="stylesheet">

    @livewireStyles

</head>

<body class="index-page">

{{--<div class="container-fluid pre-header fixed-top d-flex align-items-center justify-content-between">--}}
{{--    <div class="container">--}}
{{--        <div class="row w-100">--}}
{{--            <div class="col-xl-12 col-md-12">--}}
{{--                <div class="short_contact_list m-2">--}}
{{--                    <ul class="d-flex justify-content-start list-unstyled m-0 py-2">--}}
{{--                        <li class="mx-2"><a href="mailto:info@sarem.org"> info@hiprintink.ir <span class="fw-bold">ایمیل</span></a></li>--}}
{{--                        <li class="mx-2"><a href="tel:09122178836"> <span class="fw-bold">شماره تماس : </span> 09122178836</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<header id="header" class="header d-flex align-items-center fixed-top ">


    <livewire:components.nav.navbar></livewire:components.nav.navbar>
</header>

<main class="main" dir="rtl">

    {{ $slot }}

</main>

<footer id="footer" class="footer light-background" dir="rtl">

    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-4 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <p>آدرس: تهران، کهریزک، شورآباد، جاده واوان، روستای تورقوزآباد، خیابان سیداحمد خمینی، پلاک 93</p>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <p>
                        <strong>شماره تماس :</strong> <span dir="ltr"> +98 9308282484 </span><br>
                        <strong>ایمیل :</strong> <span>info@hiprintink.ir</span><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">

                <div class="social-links d-flex">
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://whatsapp.com/channel/0029Vao200sAjPXNCXnRGT40" target="_blank" class="twitter"><i
                            class="bi bi-whatsapp"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-telegram"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright  mt-4">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-4 col-md-6 col-6 d-flex">
                    <div class="address">
                        <ul>
                            <li><a href="#">برترین محصولات </a></li>
                            <li><a href="#">پرفروش ترین محصولات </a></li>
                            <li><a href="#">راهکار های چاپ </a></li>
                            <li><a href="#">جوهر نساجی </a></li>
                            <li><a href="#">جوهر uv</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-6 d-flex">
                    <div class="address">
                        <ul>
                            <li><a href="#">مقالات آموزشی</a></li>
                            <li><a href="#">اخبار </a></li>
                            <li><a href="#">ارتباط با ما </a></li>
                            <li><a href="#">تماس با ما </a></li>
                            <li><a href="#">درباره ما </a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-6 d-flex">
                    <div class="address">
                        <img src="{{ asset('assets/img/namad/etemad.png') }}" alt="e-namad">
                        <img src="{{ asset('assets/img/namad/neshanmeli.png') }}" alt="e-namad">
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p> © <span>تمامی حقوق این وبسایت متعلق به </span> <strong class="px-1 sitename">hi-print</strong>میباشد .</p>
        <div class="credits" dir="ltr">
            powered by <a href="https://aratick.com/">Aratick ☑️</a>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<a href='https://wa.me/+989122178836' target="_blank" class="contact-button">
    <i class="bi bi-whatsapp"></i>
</a>


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

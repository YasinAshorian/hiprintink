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


    <title> <?php echo $__env->yieldContent('title'); ?></title>

    <link href="<?php echo e(asset('assets/img/hi-logo.jpg')); ?>" rel="icon">
    <link href="<?php echo e(asset('assets/img/hi-logo.jpg')); ?>" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo e(asset('assets/css/main.css?v=1.0.2')); ?>" rel="stylesheet">

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


</head>

<body class="index-page">


















<header id="header" class="header d-flex align-items-center fixed-top ">


    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.nav.navbar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1611741196-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:components.nav.navbar>
</header>

<main class="main" dir="rtl">

    <?php echo e($slot); ?>


</main>

<footer id="footer" class="footer light-background" dir="rtl">

    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-4 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <p><span class="fw-bold">آدرس </span>: ایران تهران کهریزک خ مصطفی پلاک 93</p>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <p>
                        <strong>شماره تماس :</strong> <span dir="ltr"> 09308282484 </span><br><span dir="ltr"> 09122178836 </span><br>
                        <strong>ایمیل :</strong> <span>info@hiprintink.ir</span><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">

                <div class="social-links d-flex">
                    <a href="https://www.instagram.com/hiprint_ir/" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://whatsapp.com/channel/0029Vao200sAjPXNCXnRGT40" target="_blank" class="twitter"><i
                            class="bi bi-whatsapp"></i></a>
                    <a href="https://t.me/Hiteckmedia" class="facebook"><i class="bi bi-telegram"></i></a>
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
                        <img src="<?php echo e(asset('assets/img/namad/etemad.png')); ?>" alt="e-namad">
                        <img src="<?php echo e(asset('assets/img/namad/neshanmeli.png')); ?>" alt="e-namad">
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

<a href='https://wa.me/+989308282484' target="_blank" class="contact-button">
    <i class="bi bi-whatsapp"></i>
</a>


<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>

<!-- Main JS File -->
<script src="<?php echo e(asset('assets/js/main.js?v=1.0.1')); ?>"></script>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


</body>
</html>
<?php /**PATH /Users/yasinashourian/Documents/projects/hiprintink/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>
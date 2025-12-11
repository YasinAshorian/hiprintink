<div>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" dir="ltr">

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($loop->iteration == 1 ? "active" : ''); ?>">
                    <img src="<?php echo e(asset("storage/" . $item->path)); ?>" alt="slider">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            <!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section>
    <!-- /Hero Section -->

    <!-- products -->
    <section id="real-estate" class="real-estate section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2> شرکت <span class="text-danger">Hi-print</span></h2>
            <p>تولید کننده و صادر کننده ماشین آلات چاپ و بسته بندی و انواع مواد اولیه کل صنعت چاپ</p>
        </div>

        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="<?php echo e(asset('assets/img/products/p-1.jpg')); ?>" alt="" class="img-fluid">
                        <div class="card-body">
                            <h3><a href="#" class="stretched-link">جوهر تبلیغاتی اکو-سالونت  </a></h3>

                        </div>
                    </div>
                </div><!-- End Property Item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="<?php echo e(asset('assets/img/products/p-2.jpg')); ?>" alt="" class="img-fluid">
                        <div class="card-body">
                            <h3><a href="#" class="stretched-link">جوهر راکتیو روز</a></h3>
                        </div>
                    </div>
                </div><!-- End Property Item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="<?php echo e(asset('assets/img/products/p-3.jpg')); ?>" alt="" class="img-fluid">
                        <div class="card-body">
                            <h3><a href="#" class="stretched-link">جوهر UV NED</a></h3>
                        </div>
                    </div>
                </div><!-- End Property Item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card">
                        <img src="<?php echo e(asset('assets/img/products/p-4.jpg')); ?>" alt="" class="img-fluid">
                        <div class="card-body">
                            <h3><a href="#" class="stretched-link">جوهر پیگمنت نساجی (مستقیم به پوشاک) </a>
                            </h3>
                        </div>
                    </div>
                </div><!-- End Property Item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card">
                        <img src="<?php echo e(asset('assets/img/products/p-5.jpg')); ?>" alt="" class="img-fluid">
                        <div class="card-body">
                            <h3><a href="#" class="stretched-link"> جوهر SUBLIMATION </a></h3>
                        </div>
                    </div>
                </div><!-- End Property Item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card">
                        <img src="<?php echo e(asset('assets/img/products/p-6.jpg')); ?>" cl alt="" class="img-fluid">
                        <div class="card-body">
                            <h3><a href="#" class="stretched-link"> جوهر سالونت</h3>
                        </div>
                    </div>
                </div><!-- End Property Item -->

            </div>

        </div>





    </section>
    <!-- /products -->

    <!-- about us  -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>کیفیت جهانی،<span class="text-danger"> قیمت رقابتی</span> </h2>
            <p>با نوآوری و کیفیت در محصولات، همراهتان هستیم تا بهترین نتایج چاپی را به دست آورید.</p>
        </div>
        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-6 col-12 ">
                    <video width="100%" class="img-fluid add-borders rounded-4" autoplay="" loop="" muted=""
                           playsinline="">
                        <source src="<?php echo e(asset('assets/img/about-us/about-us-ink.mp4')); ?>" type="video/mp4">
                    </video>
                </div>

                <div class="col-lg-6 col-12 ">
                    <p class="pt-3">شرکت <span class="text-danger">Hi-Print</span> با بیش از ۱۵ سال سابقه درخشان در تولید جوهر و مدیاهای چاپ دیجیتال، به
                        عنوان یکی از پیشگامان این صنعت شناخته می‌شود. این شرکت با تکیه بر فناوری‌های پیشرفته و
                        استانداردهای بین‌المللی، محصولاتی با کیفیت بی‌نظیر برای دستگاه‌های Large Format تولید کرده است.
                        در طی سال‌ها، <span class="text-danger">Hi-Print</span> موفق شده است با ارائه محصولات با کیفیت، جایگاه معتبری در سطح جهانی کسب
                        کند، به‌طوری‌که هم‌اکنون یکی از انتخاب‌های اول برندهای برجسته دستگاه‌های چاپگر در سراسر دنیا شده
                        است.</p>
                    <p>شرکت <span class="text-danger">Hi-Print</span> به عنوان یکی از بزرگترین تأمین‌کنندگان جوهرهای <span class="text-danger">Hi-Print</span> در ایران، مفتخر است که امکان
                        دسترسی آسان به محصولات این برند جهانی را برای مشتریان داخلی فراهم کرده است. با تلاش مستمر و تعهد
                        به ارائه محصولات با کیفیت، <span class="text-danger">Hi-Print</span> نقش مؤثری در تقویت ارتباط بین تولیدکنندگان بزرگ جهانی و
                        مشتریان ایرانی ایفا کرده و همواره در جهت توسعه و رشد بازار داخلی، گام‌های مؤثری برداشته است. این
                        همکاری نزدیک با <span class="text-danger">Hi-Print</span> به مشتریان ایرانی این امکان را می‌دهد تا به پیشرفته‌ترین و با
                        کیفیت‌ترین محصولات چاپی در دنیا دسترسی داشته باشند.</p>

                </div>
            </div>

        </div>

    </section>
    <!-- /about us  -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <div class="container">

            <div class="row gy-4 text-center">


                <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">

                        <i class="bi bi-emoji-smile fs-50 text-danger"></i>

                        <a href="#" class="stretched-link">
                            <h3>چاپ بیشتر، صرفه‌جویی بیشتر</h3>
                        </a>
                        <p>جوهر و تونر با قیمت مناسب و کیفیت بالا، می‌توانید حجم بیشتری از چاپ را با هزینه کمتر انجام
                            دهید. این راهکار نه تنها باعث کاهش هزینه‌ها می‌شود، بلکه بهینه‌سازی استفاده از منابع چاپی
                            شما را تضمین می‌کند، به طوری که با هر چاپ صرفه‌جویی بیشتری را تجربه خواهید کرد.</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <i class="bi bi-shield-check fs-50 text-danger"></i>

                        <a href="#" class="stretched-link">
                            <h3>تضمین 100% سازگاری </h3>
                        </a>
                        <p>محصولات ما به‌طور کامل با چاپگرهای شما سازگار هستند، چه با تراشه و چه بدون آن. این تضمین شامل
                            نصب آسان و کیفیت بالای چاپ می‌شود که باعث می‌شود چاپگر شما با کارتریج‌های ما بدون هیچ مشکلی
                            کار کند. همچنین، این سازگاری به طول عمر چاپگر و حفظ کیفیت چاپ در طول زمان کمک می‌کند.</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <i class="bi bi-gem fs-50 text-danger"></i>

                        <a href="#" class="stretched-link">
                            <h3>قیمت مناسب و کیفیت تضمین‌شده</h3>
                        </a>
                        <p>ما تعهد داریم محصولاتی با کیفیت بالا را به شما ارائه دهیم که در عین حال قیمت‌های رقابتی و
                            مقرون به صرفه‌ای دارند. ما به‌عنوان تولیدکننده مستقیم، هزینه‌های اضافی واسطه‌ها را حذف
                            کرده‌ایم تا مطمئن شویم مشتریانمان بهترین قیمت ممکن را دریافت می‌کنند. </p>
                    </div>
                </div>
                <!-- End Service Item -->

            </div>

        </div>

    </section>
    <!-- /Services Section -->


    <!-- products -->
    <section id="services" class="services section custom-bg">
        <div class="container section-title text-right" data-aos="fade-up">
            <h4 style="font-family:'YekanBakh', sans-serif">برترین محصولات </h4>
        </div>
        <div class="container">
            <div class="row">


                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $bestProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-3 mb-4 my-1 d-flex">
                        <a href="<?php echo e(route('product-detail', ['product' => $item->name])); ?>">
                            <div class="card h-100">
                                <div class="d-flex justify-content-between p-3">

                                </div>
                                <img src="<?php echo e(asset('storage/' . $item->pictures()->first()->path)); ?>"
                                     class="card-img-top p-2 rounded-2" alt="Laptop"/>

                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="mb-0"><?php echo e($item->name); ?></p>
                                    </div>

                                    <div class="text-center mb-3">

                                        <p class="small">
                                            <a href="<?php echo e(route('product-detail', ['product' => $item->name])); ?>" class="text-muted"><?php echo e($item->short_description); ?></a>
                                        </p>
                                        <p class="mb-0 fw-bold text-secondary"><?php echo e(number_format($item->price)); ?> تومان </p>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            </div>
        </div>
    </section>
    <!-- /products -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": "auto",
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 1,
                          "spaceBetween": 40
                        },
                        "1200": {
                          "slidesPerView": 5,
                          "spaceBetween": 1
                        }
                      }
                    }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?php echo e(asset('assets/img/brands/1388351.jpg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?php echo e(asset('assets/img/brands/brother-ink-cartridges.avif')); ?>" alt="brands">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?php echo e(asset('assets/img/brands/canon-ink-cartridges.avif')); ?>" alt="brands">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?php echo e(asset('assets/img/brands/epson-ink-cartridges.avif')); ?>" alt="brands">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?php echo e(asset('assets/img/brands/hp-ink-cartridges.png')); ?>" alt="brands">
                        </div>
                    </div>


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- /Testimonials Section -->


    <section id="services" class="services section">
        <div class="container section-title text-center" data-aos="fade-up">
            <h4 style="font-family:'YekanBakh', sans-serif">توزیع بین المللی</h4>
        </div>
        <div class="container">
            <div class="row">
                <img src="<?php echo e(asset('assets/img/distributed.jpg')); ?>" alt="distributed">
            </div>
        </div>
    </section>

    <section id="blogs" class="about section">

        <div class="container">

            <div class="row gy-4">

                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card h-100">
                            <img src="<?php echo e(asset('storage/' . $item->image)); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo e($item->subject); ?></h6>
                                <p class="card-text text-truncate fs-13"><?php echo e($item->short_description); ?></p>
                                <div class="text-center">
                                    <a href="<?php echo e(route('blog-detail', $item->subject)); ?>"
                                       class="btn btn-secondary my-3 btn-sm px-5 ">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            </div>
        </div>

    </section>

</div>
<?php /**PATH /home/hiprinti/public_html/resources/views/livewire/website/home/home-page.blade.php ENDPATH**/ ?>
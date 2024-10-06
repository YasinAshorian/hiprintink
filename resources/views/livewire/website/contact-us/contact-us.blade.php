<div>
    <!-- Page Title -->
    <div class="page-title aos-init aos-animate" data-aos="fade">
        <div class="heading page-bg">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h3>ارتباط با ما </h3>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home-page') }}">صفحه اصلی </a></li>
                    <li class="current">ارتباط با ما</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.012387744327!2d51.27282397572037!3d35.510246472642905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f9202f0af420045%3A0x5d979fa751e5ee9!2zVGVocmFuIFByb3ZpbmNl2Iwg2KzYp9iv2Ycg2YjYp9mI2KfZhiwgSXJhbg!5e1!3m2!1sen!2sch!4v1726261095951!5m2!1sen!2sch"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </iframe>
            </div>
            <!-- End Google Maps -->

            <div class="row gy-4 my-5">

                <div class="col-lg-4">
                    <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>آدرس</h3>
                            <p>کهریزک، شورآباد، جاده واوان، روستای تورقوزآباد، خیابان سیداحمد خمینی، پلاک 93</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>شماره تماس</h3>
                            <p>+98 9308282484</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>ایمیل</h3>
                            <p>info@hiprintink.ir</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form wire:submit.prevent="store" class="php-email-form aos-init aos-animate" data-aos="fade-up"
                          data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="نام و نام خانوادگی"
                                       aria-label="full_name" wire:model="full_name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" placeholder="شماره تماس"
                                       aria-label=phone_number wire:model=phone_number required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="موضوع"
                                       required="" aria-label="subject" wire:model="subject">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="description" rows="6" placeholder="توضیحات "
                                          aria-label="description" wire:model="description" required=""></textarea>
                            </div>

                            <div class="col-md-12">
                                <input type="file" class="form-control" name="file" placeholder="فایل"
                                       aria-label="file" wire:model="file">
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>

                                @if(Session::has('success'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        {{ Session::get('message') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close">
                                        </button>
                                    </div>
                                @endif

                                @if(Session::has('error'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        {{ Session::get('message') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close">
                                        </button>
                                    </div>
                                @endif

                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            {{ $error }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close">
                                            </button>
                                        </div>
                                    @endforeach
                                @endif

                                <button type="submit">ارسال</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
    <!-- /Contact Section -->


</div>

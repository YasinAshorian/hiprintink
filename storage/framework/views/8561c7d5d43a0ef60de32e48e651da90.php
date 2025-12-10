<div>
    <div class="page-title" data-aos="fade">
        <div class="heading page-bg">
            <div class="container ">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?php echo e(route('home-page')); ?>">صفحه اصلی </a></li>
                    <li class="current">محصولات</li>
                </ol>
            </div>
        </nav>
    </div>


    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-md-10 m-auto">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">

                        </div>

                        <div class="carousel-inner">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $product->pictures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="carousel-item <?php echo e($loop->iteration == 1 ? "active" : ""); ?>">
                                    <img class="d-block w-100" src="<?php echo e(asset('storage/' . $image->path)); ?>"
                                         alt="<?php echo e($product->name); ?>">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <button class="carousel-control-prev text-info" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next text-info" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                </div>

                <div class="col-md-12 m-auto">
                    <div class="text-center my-5 ">
                        <h5><?php echo e($product->name); ?></h5>
                    </div>
                    <div class="my-5 py-5 px-1">
                        <?php echo $product->description; ?>

                    </div>

                </div>

            </div>


        </div>

    </section>

</div>
<?php /**PATH /Users/yasinashourian/Documents/projects/hiprintink/resources/views/livewire/website/products/product-detail.blade.php ENDPATH**/ ?>
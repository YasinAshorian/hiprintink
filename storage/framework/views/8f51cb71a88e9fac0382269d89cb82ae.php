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

                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                            <a href="" class="text-muted"><?php echo e($item->short_description); ?></a>
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

</div>
<?php /**PATH /home/hiprinti/public_html/resources/views/livewire/website/products/products.blade.php ENDPATH**/ ?>
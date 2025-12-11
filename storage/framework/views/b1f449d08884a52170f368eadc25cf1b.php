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
                    <li class="current">وبلاگ</li>
                </ol>
            </div>
        </nav>
    </div>


    <section id="blogs" class="about section">

        <div class="container my-3">

            <div class="row gy-4">

                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card h-100">
                            <img src="<?php echo e(asset('storage/' . $item->image)); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo e($item->subject); ?></h6>
                                <p class="card-text text-truncate fs-13"><?php echo e($item->short_description); ?></p>
                                <div class="text-center">
                                    <a href="<?php echo e(route('blog-detail', $item->subject)); ?>" class="btn btn-secondary my-3 btn-sm px-5 ">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            </div>
        </div>

        <div class="overflow-auto m-3 text-center">
            <?php echo $blogs->links(); ?>

        </div>

    </section>


</div>
<?php /**PATH /Users/yasinashourian/Documents/projects/hiprintink/resources/views/livewire/website/blogs/blogs.blade.php ENDPATH**/ ?>
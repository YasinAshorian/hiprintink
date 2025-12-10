<div>
    <div class="page-title" data-aos="fade">
        <div class="heading page-bg">
            <div class="container ">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h5> <?php echo e($blog->subject); ?></h5>
                        <p> <?php echo e($blog->short_description); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?php echo e(route('home-page')); ?>">صفحه اصلی </a></li>
                    <li class="current"><?php echo e($blog->subject); ?></li>
                </ol>
            </div>
        </nav>
    </div>


    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-md-12 m-auto">

                    <div class="text-center my-5 ">
                        <h5><?php echo e($blog->subject); ?></h5>
                    </div>

                    <div class="my-5 py-5 px-1">
                        <?php echo $blog->description; ?>

                    </div>

                </div>

            </div>


        </div>

    </section>

</div>
<?php /**PATH /home/hiprinti/public_html/resources/views/livewire/website/blogs/blog-detail.blade.php ENDPATH**/ ?>
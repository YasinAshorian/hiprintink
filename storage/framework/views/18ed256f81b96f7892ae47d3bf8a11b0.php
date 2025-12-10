<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="#" class="logo d-flex align-items-center">
        <img src="<?php echo e(asset('assets/img/hi-logo.jpg')); ?>" alt="hi-logo">
    </a>

    <nav id="navmenu" class="navmenu" dir="rtl">
        <ul>
            <li><a href="<?php echo e(route('home-page')); ?>" class="<?php echo e(url()->full() == route('home-page') ? "active" : ""); ?>">صفحه
                    اصلی </a></li>

            <li><a href="<?php echo e(route('about-us')); ?>" class="<?php echo e(url()->full() == route('about-us') ? "active" : ""); ?>">درباره
                    ما</a></li>

            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $productGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="dropdown"><a href="#"><span><?php echo e($item->name); ?> </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $item->productItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('products', ['group_item' => $i])); ?>"><?php echo e($i->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </ul>
                </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            <li><a href="<?php echo e(route('blogs')); ?>" class="<?php echo e(url()->full() == route('blogs') ? "active" : ""); ?>"> وبلاگ  </a></li>
            <li><a href="<?php echo e(route('contact-us')); ?>" class="<?php echo e(url()->full() == route('contact-us') ? "active" : ""); ?>">ارتباط با ما</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
</div>
<?php /**PATH /home/hiprinti/public_html/resources/views/livewire/components/nav/navbar.blade.php ENDPATH**/ ?>
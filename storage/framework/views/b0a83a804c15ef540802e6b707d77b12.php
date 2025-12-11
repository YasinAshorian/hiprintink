<?php $__env->startSection('title'); ?>
    hiprint
<?php $__env->stopSection(); ?>

<div>

    <!-- Login -->
    <div class="card">
        <div class="card-body">

            <!--[if BLOCK]><![endif]--><?php if(Session::has('success')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?php echo e(Session::get('message')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if(Session::has('error')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?php echo e(Session::get('message')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


            <!-- Logo -->
            <div class="app-brand justify-content-center">
                <a href="#" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo"></span>

                    <span class="app-brand-text demo text-body fw-bold py-3">
                        <img src="<?php echo e(asset('assets/img/hi-logo.jpg')); ?>" alt="learn craft" width="100">
                    </span>
                </a>
            </div>
            <!-- /Logo -->

            <form class="mb-3" wire:submit.prevent="login">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="email" class="form-label"></label>
                    <input type="email" class="form-control" id="email" name="email" wire:model="email" autofocus>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span
                        class="fs-12 bold text-danger"> <?php echo e($message); ?> </span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="mb-3 form-password-toggle">
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password"
                               aria-describedby="password" aria-label="password" wire:model="password"/>
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span
                        class="fs-12 bold text-danger"> <?php echo e($message); ?> </span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">ورود</button>
                </div>
            </form>


        </div>
    </div>
    <!-- /Login -->

</div>
<?php /**PATH /Users/yasinashourian/Documents/projects/hiprintink/resources/views/livewire/managers/auth/login.blade.php ENDPATH**/ ?>
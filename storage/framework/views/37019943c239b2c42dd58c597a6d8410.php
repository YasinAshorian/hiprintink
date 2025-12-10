<div>

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="card-body">
            <!--[if BLOCK]><![endif]--><?php if(Session::has('success')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?php echo e(Session::get('message')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if(Session::has('error')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <?php echo e(Session::get('message')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if($errors->any()): ?>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <?php echo e($error); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


            <div class="card card-action mb-5">
                <div class="card-alert"></div>
                <div class="card-header">
                    <div class="card-action-title bold">لیست مشتریان</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">

                                <a href="<?php echo e(route('manager.blog-create')); ?>" class="btn btn-primary text-white btn-sm"> <i class="bx bx-plus me-0 me-sm-1"></i> افزودن </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse show table-responsive">

                    <table class="table table-bordered table-responsive mb-4 w-95 m-auto">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>موضوع</th>
                            <th>تاپیک</th>
                            <th>تصویر شاخص</th>
                            <th>تاریخ</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($blog->subject); ?></td>
                                <td><?php echo e($blog->topic->name); ?></td>
                                <td><img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="<?php echo e($blog->image); ?>" width="50"></td>
                                <td><?php echo e(verta($blog->created_at)->format('Y/m/d')); ?></td>
                                <td>

                                   <a href="<?php echo e(route('manager.blog-update', $blog)); ?>" class="btn btn-info text-white btn-xs"><i class="bx bx-pen me-0 me-sm-1"></i> ویرایش </a>

                                    <a class="btn btn-danger text-white btn-xs"
                                       onclick="confirm('آیا از حذف مقاله  مطمئن هستید.') || event.stopImmediatePropagation()"
                                       wire:click="delete(<?php echo e($blog->id); ?>)">
                                        <i class="bx bx-trash me-1"></i> حذف </a>

                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                <?php echo $blogs->links(); ?>


            </div>



        </div>

    </div>
<?php /**PATH /Users/yasinashourian/Documents/projects/hiprintink/resources/views/livewire/managers/blogs/blogs/blogs.blade.php ENDPATH**/ ?>
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
                    <div class="card-action-title bold">لیست محصولات</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="<?php echo e(route('managers.product-detail', ['product' => 0])); ?>"
                                   class="btn btn-secondary add-new btn-primary btn-sm text-white"><i
                                        class="bx bx-plus me-0 me-sm-1"></i>
                                    <span class="d-none d-sm-inline-block">افزودن</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse show table-responsive">

                    <table class="table table-bordered table-responsive mb-4 w-95 m-auto">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام محصول</th>
                            <th>قیمت (تومان ، دلار )</th>
                            <th>گروه محصولاتی</th>
                            <th>دسته بندی</th>
                            <th>تصویر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e($loop->iteration + $products->firstItem() - 1); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->price . " - " . $item->dollar); ?></td>
                                <td><span
                                        class="badge bg-label-primary  me-1"><?php echo e($item->productGroupItem->productGroup->name); ?></span>
                                </td>
                                <td><span
                                        class="badge bg-label-primary  me-1"><?php echo e($item->productGroupItem->name); ?></span>
                                </td>

                                <td>
                                    <!--[if BLOCK]><![endif]--><?php if(!is_null($item->pictures()->first())): ?>
                                        <img src="<?php echo e(asset("storage/" . $item->pictures()->first()->path)); ?>" alt="image"
                                             width="30"></td>
                                    <?php else: ?>
                                        <span class="text-danger fw-bold">تصویر آپلود نشده !</span>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <td>

                                    <a href="<?php echo e(route('managers.product-detail', $item)); ?>"
                                       class="btn btn-outline-secondary add-new  btn-sm"><span><span
                                                class="d-none d-sm-inline-block">ویرایش  </span></span>
                                    </a>


                                    <a class="btn btn-outline-danger btn-sm"
                                       onclick="confirm('آیا از حذف محصول  مطمئن هستید.') || event.stopImmediatePropagation()"
                                       wire:click="delete(<?php echo e($item->id); ?>)">
                                        حذف </a>

                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                <div class="m-2 overflow-auto">
                    <?php echo $products->links(); ?>

                </div>
            </div>


        </div>

    </div>
</div>
<?php /**PATH /Users/yasinashourian/Documents/projects/hiprintink/resources/views/livewire/managers/products/products.blade.php ENDPATH**/ ?>
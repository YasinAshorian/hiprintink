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
                    <div class="card-action-title bold">لیست گروه محصولاتی </div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <button class="btn btn-secondary add-new btn-primary btn-sm" tabindex="0"
                                        wire:click="setIsUpdate(false)"
                                        aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasAddUser"><span><i
                                            class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">افزودن </span></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse show table-responsive">

                    <table class="table table-bordered table-responsive mb-4 w-95 m-auto">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام گروه محصولاتی</th>
                            <th>وضعیت</th>
                            <th>تاریخ ثبت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $productGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e($loop->iteration + $productGroups->firstItem() - 1); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><span
                                        class="badge <?php echo e($item->status == 'active' ? 'bg-label-primary' : "bg-label-danger"); ?>  me-1"><?php echo e(($item->status == 'active') ? 'فعال' : "غیر فعال"); ?></span> </td>
                                <td><?php echo e(verta($item->crteated_at)); ?></td>
                                <td>

                                    <a class="btn btn-outline-secondary add-new  btn-sm" tabindex="0"
                                            wire:click="setUpdate(<?php echo e($item->id); ?>)"
                                            aria-controls="DataTables_Table_0"  data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasAddUser"><span><span
                                                class="d-none d-sm-inline-block">ویرایش  </span></span>
                                    </a>

                                    <a href="<?php echo e(route('managers.product-group-items', $item)); ?>"
                                       class="btn btn-outline-success btn-sm">
                                         تعریف دسته بندی </a>

                                    <a class="btn  <?php echo e(($item->status == 'active') ? 'btn-outline-danger' : 'btn-outline-info'); ?>  btn-sm" <?php if(($item->status == "active")): ?> wire:click="changeStatus(<?php echo e($item->id); ?>, 'Inactive')" <?php else: ?> wire:click="changeStatus(<?php echo e($item->id); ?>, 'active')" <?php endif; ?>
                                    onclick="return confirm('آیاد از انجام این عملیات مطمئن هستید ؟') || event.stopImmediatePropagation()"
                                    ><?php echo e(($item->status == 'active') ? 'مسدود سازی ' : 'فعال سازی'); ?></a>

                                    <a class="btn btn-outline-danger btn-sm"
                                       onclick="confirm('آیا از حذف گروه محصولات  مطمئن هستید.') || event.stopImmediatePropagation()"
                                       wire:click="delete(<?php echo e($item->id); ?>)">
                                        حذف </a>

                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                <?php echo $productGroups->links(); ?>


            </div>


            <div class="offcanvas offcanvas-end <?php echo e($isOpen ? 'show' : ''); ?>" tabindex="-1" id="offcanvasAddUser"
                 aria-labelledby="offcanvasAddUserLabel" aria-modal="true" role="dialog">
                <div class="offcanvas-header">
                    <!--[if BLOCK]><![endif]--><?php if($isUpdate): ?>
                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">ویرایش گروه محصولات </h5>
                    <?php else: ?>
                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">افزودن گروه محصولات </h5>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close" wire:click="setDialog(false)">

                    </button>
                </div>

                <div class="offcanvas-body mx-0 flex-grow-0">

                    <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework"
                          <?php if($isUpdate): ?> wire:submit.prevent="update" <?php else: ?> wire:submit.prevent="create" <?php endif; ?> >

                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="name">نام گروه محصولات </label>
                            <input type="text" class="form-control" id="name" placeholder="نام گروه محصولات"
                                   name="name" aria-label="نام گروه محصولات" wire:model="name">

                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="status">وضعیت </label>
                            <select class="form-select item-details mb-2" id="status" name="status" wire:model="status">
                                <option value="active">فعال</option>
                                <option value="Inactive">غیر فعال </option>

                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">ثبت</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas"
                                wire:click="setDialog(false)">بستن
                        </button>

                    </form>
                </div>
            </div>


        </div>

    </div>
</div>
<?php /**PATH /home/hiprinti/public_html/resources/views/livewire/managers/products/product-group.blade.php ENDPATH**/ ?>
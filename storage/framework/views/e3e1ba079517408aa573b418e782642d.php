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
                    <div class="card-action-title bold">لیست تاپیک ها </div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <button class="btn btn-secondary add-new btn-primary btn-sm" tabindex="0"
                                        wire:click="setIsUpdate(false)"
                                        aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasAddUser"><span><i
                                            class="bx bx-plus me-0 me-sm-1"></i><span
                                            class="d-none d-sm-inline-block">افزودن </span></span>
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
                            <th>نام </th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($topic->name); ?></td>
                                <td>

                                    <button class="btn btn-secondary add-new btn-info btn-xs" tabindex="0"
                                            wire:click="setUpdate(<?php echo e($topic->id); ?>)"
                                            aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasAddUser"><span><i
                                                class="bx bx-pen me-0 me-sm-1"></i><span
                                                class="d-none d-sm-inline-block">ویرایش  </span></span>
                                    </button>

                                    <a class="btn btn-danger text-white btn-xs"
                                       onclick="confirm('آیا از حذف تاپبک  مطمئن هستید.') || event.stopImmediatePropagation()"
                                       wire:click="delete(<?php echo e($topic->id); ?>)">
                                        <i class="bx bx-trash me-1"></i> حذف </a>

                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                <?php echo $topics->links(); ?>


            </div>


                <div class="offcanvas offcanvas-end <?php echo e($isOpen ? 'show' : ''); ?>" tabindex="-1" id="offcanvasAddUser"
                     aria-labelledby="offcanvasAddUserLabel" aria-modal="true" role="dialog">
                    <div class="offcanvas-header">

                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">افزودن تاپیک </h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close" wire:click="setDialog(false)">

                        </button>
                    </div>

                    <div class="offcanvas-body mx-0 flex-grow-0">

                        <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework"
                              <?php if($isUpdate): ?> wire:submit.prevent="update" <?php else: ?> wire:submit.prevent="create"  <?php endif; ?> >

                            <div class="mb-3 fv-plugins-icon-container">
                                <label class="form-label" for="add-user-name">نام تاپیک </label>
                                <input type="text" class="form-control" id="add-user-name" placeholder="نام تاپیک"
                                       name="name" aria-label="نام تاپیک" wire:model="name">

                            </div>


                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">ثبت</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas" wire:click="setDialog(false)">بستن</button>

                        </form>
                    </div>
                </div>

        </div>

    </div>


<?php /**PATH /Users/yasinashourian/Documents/projects/hiprintink/resources/views/livewire/managers/blogs/topics/topics.blade.php ENDPATH**/ ?>
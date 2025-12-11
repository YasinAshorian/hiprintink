<div>
    <div dir="rtl">

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card card-action mb-5">
                <div class="card-alert"></div>
                <div class="card-header">
                    <div class="card-action-title bold">لیست درخواست های مشاوره</div>

                </div>
                <div class="collapse show table-responsive">

                    <table class="table table-bordered table-responsive mb-4 w-95 m-auto">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام و نام خانوادگی</th>
                            <th>شماره همراه</th>
                            <th>فایل</th>
                            <th>تاریخ درخواست</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $contactUs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e($loop->iteration + $contactUs->firstItem() - 1); ?></td>
                                <td><?php echo e($item->full_name); ?></td>
                                <td><?php echo e($item->phone_number); ?></td>
                                <td>
                                    <!--[if BLOCK]><![endif]--><?php if(!is_null($item->file)): ?>
                                        <a href="<?php echo e(asset("storage/" . $item->file)); ?>" class="btn btn-outline-primary btn-sm" target="_blank">دانلود</a>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                                <td><?php echo e(verta($item->created_at)->format('Y-m-d H:i:s')); ?></td>
                                <td>
                                    <a href="<?php echo e(route('manager.contact-detail', $item)); ?>" class="btn btn-outline-success btn-sm px-3">مشاهده</a>
                                </td>

                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                <?php echo $contactUs->links(); ?>


            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/hiprinti/public_html/resources/views/livewire/managers/contact-us/contact-us.blade.php ENDPATH**/ ?>
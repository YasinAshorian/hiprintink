<div>

    <div class="container-xxl flex-grow-1 container-p-y">

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


        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"> ساخت مقاله جدید </h5> <small class="text-muted float-end"> </small>
            </div>
            <div class="card-body">
                <form id="createBlog" wire:submit.prevent="store">

                    <div class="mb-3">
                        <label class="form-label" for="subject">موضوع </label>
                        <input type="text" class="form-control" id="subject" placeholder="موضوع" name="subject"
                               wire:model="subject" required>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="image">تصویر شاخص </label>
                            <input type="file" class="form-control" id="image"  wire:model="image" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="topic">دسته بندی </label>
                            <select class="form-select item-details mb-2" id="topic" name="topic_id" wire:model="topic_id" required>
                                <option > -- انتخاب کنید --</option>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <option <?php if($topic_id == $topic->id): ?> selected
                                            <?php endif; ?> value="<?php echo e($topic->id); ?>"><?php echo e($topic->name); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                            </select>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="subject">توضیح کوتاه </label>
                        <input type="text" class="form-control" id="subject"
                               wire:model="short_description" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="open-source-plugins"> </label>
                        <div id="textid" wire:ignore>
                            <textarea id="open-source-plugins" required><?php echo e($description); ?></textarea>
                            <script src="<?php echo e(asset('assets_panel/ckeditor/ckeditor.js')); ?>"></script>
                            <script>
                                var options = {
                                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                };
                                CKEDITOR.replace('open-source-plugins', options);

                                // Listener to update the Livewire property
                                CKEDITOR.instances['open-source-plugins'].on('change', function () {
                                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').
                                    set('description', CKEDITOR.instances['open-source-plugins'].getData());
                                });
                            </script>
                        </div>

                    </div>

                    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-dark text-white">بازگشت </a>
                    <button type="submit" class="btn btn-primary">ثبت</button>


                </form>
            </div>
        </div>
    </div>

</div>

<?php /**PATH /home/hiprinti/public_html/resources/views/livewire/managers/blogs/blogs/blog-create.blade.php ENDPATH**/ ?>
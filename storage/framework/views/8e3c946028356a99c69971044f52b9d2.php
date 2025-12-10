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


            <div class="card mb-4">

                <!--[if BLOCK]><![endif]--><?php if($create): ?>
                    <h6 class="card-header">صفحه افزودن محصول </h6>
                <?php else: ?>
                    <h6 class="card-header"><span> <?php echo e($product->name); ?></span> صفحه ویرایش محصول </h6>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                <form class="card-body my-3" <?php if($create): ?> wire:submit.prevent="store"
                      <?php else: ?> wire:submit.prevent="update" <?php endif; ?>>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label" for="p_group">انتخاب دسته بندی محصول </label>
                            <select id="p_group" class=" form-select " wire:model.live="product_group_item_id" required>
                                <option>انتخاب کنید</option>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $p_g_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="p-name">نام محصول </label>
                            <input type="text" id="p-name" class="form-control" wire:model="name" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="short_description">توضیح کوتاه راجب محصول </label>
                            <input type="text" id="short_description" class="form-control"
                                   wire:model="short_description">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="status">وضعیت </label>
                            <select id="status" class=" form-select " wire:model="status" required>
                                <option>انتخاب کنید</option>
                                <option value="<?php echo e(\App\Models\Product::STATUS_ACTIVE); ?>">فعال</option>
                                <option value="<?php echo e(\App\Models\Product::STATUS_IN_ACTIVE); ?>">غیر فعال</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="top_products">نمایش در محصولات برتر </label>
                            <select id="top_products" class=" form-select " wire:model.live="top_products" required>
                                <option>انتخاب کنید</option>
                                <option value="0">نمایش داده نشود</option>
                                <option value="1">نمایش داده شود</option>
                            </select>
                        </div>

                    </div>

                    <hr class="my-4 mx-n4">
                    <h6>توضیحات محصول </h6>
                    <div class="row g-3">

                        <div class="col-md-12">
                            <label class="form-label" for="open-source-plugins"> </label>
                            <div id="textid" wire:ignore>
                                <textarea id="open-source-plugins"><?php echo e($description); ?></textarea>
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


                    </div>

                    <hr class="my-4 mx-n4">
                    <h6>تصاویر محصولات </h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="images">انتخاب تصاویر </label>
                            <input type="file" id="images" class="form-control"
                                   wire:model="images" <?php echo e(($create) ? "required" : ""); ?> multiple>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="price">مبلغ (تومان)</label>
                            <input type="number" id="price" class="form-control"
                                   wire:model="price"  required>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="dollar">مبلغ (دلار)</label>
                            <input type="number" id="dollar" class="form-control"
                                   wire:model="dollar"  required>
                        </div>

                        <div class="col-md-12">

                            <h6>نمایش اولیه :</h6>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img
                                    src="<?php echo e($img->temporaryUrl()); ?>"
                                    width="100" alt="img"/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pictures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="btn btn-danger btn-xs text-white" onclick="return confirm('آیا از حذف تصویر مطمئن هستید ؟') || event.stopImmediatePropagation()" wire:click="deleteImg(<?php echo e($pic->id); ?>)"><i class="bx bx-trash"></i></a>
                                <img
                                    src="<?php echo e(asset('storage/' . $pic->path)); ?>"
                                    width="100" alt="img"/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->


                        </div>

                    </div>

                    <hr class="my-4 mx-n4">

                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                        <a href="<?php echo e(route('managers.products')); ?>" class="btn btn-label-secondary">انصراف </a>
                    </div>

                    <div wire:loading wire:target="images">
                        <div class="overlay">
                            <div class="sk-chase sk-info ">
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                                <div class="sk-chase-dot"></div>
                            </div>
                        </div>
                    </div>

                </form>


            </div>


        </div>

    </div>
</div>
<?php /**PATH /home/hiprinti/public_html/resources/views/livewire/managers/products/product-detail.blade.php ENDPATH**/ ?>
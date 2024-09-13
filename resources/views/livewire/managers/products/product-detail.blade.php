<div>

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endforeach
            @endif


            <div class="card mb-4">

                @if($create)
                    <h6 class="card-header">صفحه افزودن محصول </h6>
                @else
                    <h6 class="card-header"><span> {{ $product->name }}</span> صفحه ویرایش محصول </h6>
                @endif


                <form class="card-body my-3" @if($create) wire:submit.prevent="store"
                      @else wire:submit.prevent="update" @endif>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label" for="p_group">انتخاب دسته بندی محصول </label>
                            <select id="p_group" class=" form-select " wire:model.live="product_group_item_id" required>
                                <option>انتخاب کنید</option>
                                @foreach($p_g_items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

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
                                <option value="{{ \App\Models\Product::STATUS_ACTIVE }}">فعال</option>
                                <option value="{{ \App\Models\Product::STATUS_IN_ACTIVE}}">غیر فعال</option>
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
                                <textarea id="open-source-plugins">{{ $description }}</textarea>
                                <script src="{{ asset('assets_panel/ckeditor/ckeditor.js') }}"></script>
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
                                        @this.
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
                                   wire:model="images" {{ ($create) ? "required" : "" }} multiple>
                        </div>

                        <div class="col-md-12">

                            <h6>نمایش اولیه :</h6>
                            @foreach ($images as $img)
                                <img
                                    src="{{ $img->temporaryUrl()  }}"
                                    width="100" alt="img"/>
                            @endforeach

                            @foreach ($pictures as $pic)
                                <a class="btn btn-danger btn-xs text-white" onclick="return confirm('آیا از حذف تصویر مطمئن هستید ؟') || event.stopImmediatePropagation()" wire:click="deleteImg({{ $pic->id }})"><i class="bx bx-trash"></i></a>
                                <img
                                    src="{{  asset('storage/' . $pic->path)  }}"
                                    width="100" alt="img"/>
                            @endforeach


                        </div>

                    </div>

                    <hr class="my-4 mx-n4">

                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                        <a href="{{ route('managers.products') }}" class="btn btn-label-secondary">انصراف </a>
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

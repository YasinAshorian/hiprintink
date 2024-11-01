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


            <div class="card card-action mb-5">
                <div class="card-alert"></div>
                <div class="card-header">
                    <div class="card-action-title bold">لیست محصولات</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="{{ route('managers.product-detail', ['product' => 0]) }}"
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

                        @foreach($products as $item)

                            <tr>
                                <td>{{ $loop->iteration + $products->firstItem() - 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price . " - " . $item->dollar }}</td>
                                <td><span
                                        class="badge bg-label-primary  me-1">{{ $item->productGroupItem->productGroup->name }}</span>
                                </td>
                                <td><span
                                        class="badge bg-label-primary  me-1">{{ $item->productGroupItem->name }}</span>
                                </td>

                                <td>
                                    @if(!is_null($item->pictures()->first()->path))
                                        <img src="{{ asset("storage/" . $item->pictures()->first()->path) }}" alt="image"
                                             width="30"></td>
                                    @else
                                        <span class="text-danger fw-bold">تصویر آپلود نشده !</span>
                                    @endif

                                <td>

                                    <a href="{{ route('managers.product-detail', $item) }}"
                                       class="btn btn-outline-secondary add-new  btn-sm"><span><span
                                                class="d-none d-sm-inline-block">ویرایش  </span></span>
                                    </a>


                                    <a class="btn btn-outline-danger btn-sm"
                                       onclick="confirm('آیا از حذف محصول  مطمئن هستید.') || event.stopImmediatePropagation()"
                                       wire:click="delete({{ $item->id }})">
                                        حذف </a>

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="m-2 overflow-auto">
                    {!! $products->links() !!}
                </div>
            </div>


        </div>

    </div>
</div>

<div>

    <div class="container flex-grow-1 container-p-y">

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

        <div class="card">

            <div class="row card-header">

                <div class="col-md-2 d-flex my-1">
                    <h6 class="flex-fill ">اسلایدر ها </h6>
                </div>


                <div class="col-md-10 my-1" dir="ltr">
                    <button class="btn btn-outline-success btn-ms mx-1 px-3 float-end" data-bs-toggle="modal"
                            data-bs-target="#addSlider" wire:click="setModalStatus(true)"><i class="bx bx-plus px-1"></i>افزودن تصویر
                    </button>
                </div>

                <div class="modal fade {{ $isOpenManual ? 'show' : '' }}" id="addSlider"
                     tabindex="-1"
                     @if($isOpenManual) style="display: block;" @else style="display: none;" @endif
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form class="w-100" wire:submit.prevent="save">

                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title" id="modalCenterTitle">افزودن تصویر جدید </h5>


                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"
                                            wire:click="setModalStatus(false)"></button>
                                </div>

                                <div class="modal-body">


                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="photo_address" class="form-label">تصوير</label>
                                            <input type="file" id="photo_address" class="form-control"
                                                   wire:model="file" wire:model="photo_address" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer " style="display:block;">
                                    <button type="button" class="btn btn-label-secondary"
                                            data-bs-dismiss="modal" wire:click="setModalStatus(false)">
                                        بستن
                                    </button>

                                    <button type="submit" class="btn btn-primary"
                                            data-bs-dismiss="modal">
                                        ثبت
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>


                <div wire:loading>
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

            </div>
            <hr class="mt-1">


            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th><i class="fas fa-sort-numeric-down"></i></th>
                            <th>مسیر  </th>
                            <th>تصویر </th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($sliders as $item)
                            <tr>
                                <td>{{ $loop->iteration + $sliders->firstItem() - 1 }}</td>
                                <td><a href="{{ asset('storage/' . $item->path) }}" target="_blank">{{ $item->path }}</a></td>
                                <td><img src="{{ asset('storage/' . $item->path) }}" alt="اسلایدر " width="100"></td>

                                <td>
                                    <a class="btn btn-outline-danger btn-sm " wire:click="delete({{ $item->id }})"
                                       onclick="return confirm('آیا از حذف تصویر مطمئن هستید ؟') || event.stopImmediatePropagation()">حذف </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="overflow-auto">
                    {!!  $sliders->links() !!}
                </div>

                <div class="col-md-2 my-2 float-end">
                    <label for="prePage" class="form-label">تعداد رکورد</label>
                    <select id="prePage" class="form-control" wire:model.live="prePage">
                        <option value="15">15</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>

                </div>

            </div>
        </div>
    </div>


</div>

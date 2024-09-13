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
                    <div class="card-action-title bold">لیست کاربران ادمین </div>
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
                            <th>نام و نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>تاریخ ثبت نام</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)

                            <tr>
                                <td>{{ $loop->iteration + $users->firstItem() - 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ verta($user->crteated_at) }}</td>
                                <td>

                                    <button class="btn btn-secondary add-new btn-info btn-xs" tabindex="0"
                                            wire:click="setUpdate({{ $user->id }})"
                                            aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasAddUser"><span><i
                                                class="bx bx-pen me-0 me-sm-1"></i><span
                                                class="d-none d-sm-inline-block">ویرایش  </span></span>
                                    </button>

                                    <a class="btn btn-danger text-white btn-xs"
                                       onclick="confirm('آیا از حذف کاربر  مطمئن هستید.') || event.stopImmediatePropagation()"
                                       wire:click="delete({{ $user->id }})">
                                        <i class="bx bx-trash me-1"></i> حذف </a>

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $users->links() !!}

            </div>


            <div class="offcanvas offcanvas-end {{ $isOpen ? 'show' : '' }}" tabindex="-1" id="offcanvasAddUser"
                 aria-labelledby="offcanvasAddUserLabel" aria-modal="true" role="dialog">
                <div class="offcanvas-header">
                    @if($isUpdate)
                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">ویرایش کاربر ادمین </h5>
                    @else
                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">افزودن کاربر ادمین </h5>
                    @endif

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close" wire:click="setDialog(false)">

                    </button>
                </div>

                <div class="offcanvas-body mx-0 flex-grow-0">

                    <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework"
                          @if($isUpdate) wire:submit.prevent="update" @else wire:submit.prevent="create" @endif >

                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="name">نام و نام خانوادگی </label>
                            <input type="text" class="form-control" id="name" placeholder="نام و نام خانوادگی "
                                   name="name" aria-label="نام و نام خانوادگی" wire:model="name">

                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="email">ایمیل</label>
                            <input type="email" id="email" class="form-control" placeholder="ایمیل"
                                   aria-label="ایمیل" name="email" wire:model="email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">پسورد </label>
                            <input type="text" id="password" class="form-control" placeholder="پسورد"
                                   aria-label="پسورد" name="password" wire:model="password">
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

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
                    <div class="card-action-title bold">لیست مشتریان</div>
                    <div class="card-action-element">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">

                                <a href="{{ route('manager.blog-create') }}" class="btn btn-primary text-white btn-sm"> <i class="bx bx-plus me-0 me-sm-1"></i> افزودن </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse show table-responsive">

                    <table class="table table-bordered table-responsive mb-4 w-95 m-auto">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>موضوع</th>
                            <th>تاپیک</th>
                            <th>تصویر شاخص</th>
                            <th>تاریخ</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($blogs as $blog)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->subject }}</td>
                                <td>{{ $blog->topic->name }}</td>
                                <td><img src="{{  asset('storage/' . $blog->image) }}" alt="{{ $blog->image }}" width="50"></td>
                                <td>{{  verta($blog->created_at)->format('Y/m/d') }}</td>
                                <td>

                                   <a href="{{ route('manager.blog-update', $blog) }}" class="btn btn-info text-white btn-xs"><i class="bx bx-pen me-0 me-sm-1"></i> ویرایش </a>

                                    <a class="btn btn-danger text-white btn-xs"
                                       onclick="confirm('آیا از حذف مقاله  مطمئن هستید.') || event.stopImmediatePropagation()"
                                       wire:click="delete({{ $blog->id }})">
                                        <i class="bx bx-trash me-1"></i> حذف </a>

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $blogs->links() !!}

            </div>



        </div>

    </div>

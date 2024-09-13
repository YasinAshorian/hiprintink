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

                        @foreach($contactUs as $item)

                            <tr>
                                <td>{{ $loop->iteration + $contactUs->firstItem() - 1 }}</td>
                                <td>{{ $item->full_name }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>
                                    @if(!is_null($item->file))
                                        <a href="{{ asset("storage/" . $item->file) }}" class="btn btn-outline-primary btn-sm" target="_blank">دانلود</a>
                                    @endif
                                </td>
                                <td>{{  verta($item->created_at)->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a href="{{ route('manager.contact-detail', $item) }}" class="btn btn-outline-success btn-sm px-3">مشاهده</a>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                {!! $contactUs->links() !!}

            </div>
        </div>
    </div>
</div>

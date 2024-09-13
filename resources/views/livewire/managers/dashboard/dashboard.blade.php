<div>
    <div dir="rtl">

        <div class="container-xxl flex-grow-1 container-p-y">


            <div class="row mb-4" id="sortable-cards">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card drag-item cursor-move mb-lg-0 mb-4">
                        <div class="card-body text-center">
                            <h2>
                                <i class="bx bx-server text-success display-6"></i>
                            </h2>
                            <h5>تعداد محصولات فعال </h5>
                            <h5>12</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card drag-item cursor-move mb-lg-0 mb-4">
                        <div class="card-body text-center">
                            <h2>
                                <i class="bx bx-news text-info display-6"></i>
                            </h2>
                            <h5>تعداد اخبار </h5>
                            <h5>25</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card drag-item cursor-move mb-lg-0 mb-4">
                        <div class="card-body text-center">
                            <h2>
                                <i class="bx bxl-telegram text-danger display-6"></i>
                            </h2>
                            <h5>تعداد پیغام ها </h5>
                            <h5>25</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card drag-item cursor-move mb-lg-0 mb-4">
                        <div class="card-body text-center">
                            <h2>
                                <i class="bx bx-paperclip text-primary display-6"></i>
                            </h2>
                            <h5>تعداد وبلاگ ها </h5>
                            <h5>12</h5>

                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="card card-action mb-5">--}}
{{--                <div class="card-alert"></div>--}}
{{--                <div class="card-header">--}}
{{--                    <div class="card-action-title bold">لیست درخواست های مشاوره </div>--}}

{{--                </div>--}}
{{--                <div class="collapse show table-responsive">--}}

{{--                    <table class="table table-bordered table-responsive mb-4 w-95 m-auto">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>#</th>--}}
{{--                            <th>نام و نام خانوادگی</th>--}}
{{--                            <th>شماره همراه</th>--}}
{{--                            <th>تاریخ درخواست</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}

{{--                        @foreach($contactUs as $item)--}}

{{--                            <tr>--}}
{{--                                <td>{{ $loop->iteration }}</td>--}}
{{--                                <td>{{ $item->full_name }}</td>--}}
{{--                                <td>{{ $item->phone }}</td>--}}
{{--                                <td>{{  verta($item->created_at)->format('Y-m-d H:i:s') }}</td>--}}

{{--                            </tr>--}}

{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}

{{--                {!! $contactUs->links() !!}--}}

{{--            </div>--}}

        </div>

    </div>

</div>

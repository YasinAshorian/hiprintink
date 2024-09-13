<div>
    <div class="page-title" data-aos="fade">
        <div class="heading page-bg">
            <div class="container ">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home-page') }}">صفحه اصلی </a></li>
                    <li class="current">محصولات</li>
                </ol>
            </div>
        </nav>
    </div>


    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                @foreach($products as $item)
                    <div class="col-md-6 col-lg-3 mb-4 my-1 d-flex">
                        <a href="{{ route('product-detail', ['product' => $item->name]) }}">
                            <div class="card h-100">
                                <div class="d-flex justify-content-between p-3">

                                </div>
                                <img src="{{ asset('storage/' . $item->pictures()->first()->path) }}"
                                     class="card-img-top p-2 rounded-2" alt="Laptop"/>

                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="mb-0">{{ $item->name }}</p>
                                    </div>

                                    <div class="text-center mb-3">

                                        <p class="small">
                                            <a href="" class="text-muted">{{ $item->short_description }}</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

</div>

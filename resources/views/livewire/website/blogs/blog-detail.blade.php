<div>
    <div class="page-title" data-aos="fade">
        <div class="heading page-bg">
            <div class="container ">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h5> {{ $blog->subject  }}</h5>
                        <p> {{ $blog->short_description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home-page') }}">صفحه اصلی </a></li>
                    <li class="current">{{ $blog->subject  }}</li>
                </ol>
            </div>
        </nav>
    </div>


    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-md-8">
                    <div class="my-5 py-5 px-1">
                        {!! $blog->description !!}
                    </div>

                </div>

            </div>


        </div>

    </section>

</div>

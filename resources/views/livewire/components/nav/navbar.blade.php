<div class="container-fluid position-relative d-flex align-items-center justify-content-between">

    <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/hi-logo.jpg') }}" alt="hi-logo">
    </a>

    <div class="container">
        <nav id="navmenu" class="navmenu" dir="rtl">
            <ul>
                <li><a href="{{ route('home-page') }}" class="{{ url()->full() == route('home-page') ? "active" : "" }}">صفحه
                        اصلی </a></li>

                <li><a href="{{ route('about-us') }}" class="{{ url()->full() == route('about-us') ? "active" : "" }}">درباره
                        ما</a></li>

                @foreach($productGroups as $item)

                    <li class="dropdown"><a href="#"><span>{{ $item->name }} </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            @foreach($item->productItems as $i)
                                <li><a href="{{ route('products', ['group_item' => $i]) }}">{{ $i->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                @endforeach

                <li><a href="{{ route('blogs') }}" class="{{ url()->full() == route('blogs') ? "active" : "" }}"> وبلاگ  </a></li>
                <li><a href="{{ route('contact-us') }}" class="{{ url()->full() == route('contact-us') ? "active" : "" }}">ارتباط با ما</a></li>
            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</div>

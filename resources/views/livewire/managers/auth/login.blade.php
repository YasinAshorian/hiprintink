@section('title')
    hiprint
@endsection

<div>

    <!-- Login -->
    <div class="card">
        <div class="card-body">

            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            @if(Session::has('error'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif


            <!-- Logo -->
            <div class="app-brand justify-content-center">
                <a href="#" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo"></span>

                    <span class="app-brand-text demo text-body fw-bold py-3">
                        <img src="{{ asset('assets/img/hi-logo.jpg') }}" alt="learn craft" width="100">
                    </span>
                </a>
            </div>
            <!-- /Logo -->

            <form class="mb-3" wire:submit.prevent="login">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label"></label>
                    <input type="email" class="form-control" id="email" name="email" wire:model="email" autofocus>
                    @error('email') <span
                        class="fs-12 bold text-danger"> {{ $message }} </span> @enderror
                </div>

                <div class="mb-3 form-password-toggle">
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password"
                               aria-describedby="password" aria-label="password" wire:model="password"/>
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    @error('password') <span
                        class="fs-12 bold text-danger"> {{ $message }} </span> @enderror

                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">ورود</button>
                </div>
            </form>


        </div>
    </div>
    <!-- /Login -->

</div>

<div>

    <div class="container-xxl flex-grow-1 container-p-y">

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


        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"> ساخت مقاله جدید </h5> <small class="text-muted float-end"> </small>
            </div>
            <div class="card-body">
                <form id="createBlog" wire:submit.prevent="store">

                    <div class="mb-3">
                        <label class="form-label" for="subject">موضوع </label>
                        <input type="text" class="form-control" id="subject" placeholder="موضوع" name="subject"
                               wire:model="subject" required>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="image">تصویر شاخص </label>
                            <input type="file" class="form-control" id="image"  wire:model="image" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="topic">دسته بندی </label>
                            <select class="form-select item-details mb-2" id="topic" name="topic_id" wire:model="topic_id" required>
                                <option > -- انتخاب کنید --</option>
                                @foreach($topics as $topic)

                                    <option @if($topic_id == $topic->id) selected
                                            @endif value="{{ $topic->id }}">{{ $topic->name }}</option>

                                @endforeach

                            </select>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="subject">توضیح کوتاه </label>
                        <input type="text" class="form-control" id="subject"
                               wire:model="short_description" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="open-source-plugins"> </label>
                        <div id="textid" wire:ignore>
                            <textarea id="open-source-plugins" required>{{ $description }}</textarea>
                            <script src="{{ asset('assets_panel/ckeditor/ckeditor.js') }}"></script>
                            <script>
                                var options = {
                                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                };
                                CKEDITOR.replace('open-source-plugins', options);

                                // Listener to update the Livewire property
                                CKEDITOR.instances['open-source-plugins'].on('change', function () {
                                    @this.
                                    set('description', CKEDITOR.instances['open-source-plugins'].getData());
                                });
                            </script>
                        </div>

                    </div>

                    <a href="{{ url()->previous() }}" class="btn btn-dark text-white">بازگشت </a>
                    <button type="submit" class="btn btn-primary">ثبت</button>


                </form>
            </div>
        </div>
    </div>

</div>


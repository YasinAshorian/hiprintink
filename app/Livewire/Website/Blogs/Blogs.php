<?php

namespace App\Livewire\Website\Blogs;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public function render()
    {
        $blogs = Blog::query()->latest()->paginate(15);

        return view('livewire.website.blogs.blogs', ['blogs' => $blogs]);
    }
}

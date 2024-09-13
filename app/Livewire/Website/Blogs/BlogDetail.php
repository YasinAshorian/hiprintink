<?php

namespace App\Livewire\Website\Blogs;

use App\Models\Blog;
use Livewire\Component;

class BlogDetail extends Component
{
    public $blog;

    public function mount()
    {
        $this->blog = Blog::query()->where('subject', 'LIKE', $this->blog)->first();
    }

    public function render()
    {
        return view('livewire.website.blogs.blog-detail');
    }
}

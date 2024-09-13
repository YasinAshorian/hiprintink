<?php

namespace App\Livewire\Managers\Blogs\Blogs;

use App\Models\Blog;
use Livewire\Component;

class Blogs extends Component
{

    public function delete($blogId)
    {
        Blog::query()->where('id', $blogId)->delete();

        return back()->with(['success' => true, 'message' => 'حذف مقاله با موفقیت انجام شد .']);
    }

    public function render()
    {
        $blogs = Blog::query()->paginate(15);
        return view('livewire.managers.blogs.blogs.blogs', ['blogs' => $blogs])->layout('livewire.layouts.managers');
    }
}

<?php

namespace App\Livewire\Managers\Blogs\Blogs;

use App\Models\Blog;
use App\Models\BlogTopic;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogCreate extends Component
{
    use WithFileUploads;

    public $topic_id;
    public $subject;
    public $short_description;
    public $description;
    public $image;

    public function rules()
    {
        return [
            "topic_id" => "required|integer",
            "subject" => "required|string",
            "short_description" => "required|string",
            "description" => "required|string",
            "image" => "required|image",
        ];
    }

    public function messages()
    {
        return [
            "topic_id" => "دسته بندی را به درستی انتخاب کنید .",
            "subject" => "موضوع را به درستی وارد نمایید .",
            "short_description" => "توضیح کوتاهی را وارد نمایید .",
            "description" => "توضیحات را به درستی وارد نمایید .",
            "image" => "تصویر را به درستی انتخاب کنید .",
        ];
    }

    public function updatedTopicId()
    {
        $this->topic_id = intval($this->topic_id);
    }

    public function store()
    {
        $validate = $this->validate();

        try {
            $validate['image'] = $this->image->store('blog-image', 'public');
            Blog::query()->create($validate);
        } catch (\Exception $e) {
            response_log('error', 'error in create new blog from admin panel !', $e->getMessage());
            return back()->with(['error' => true, "message" => "مشکلی در فرآیند ایجاد مقاله به وجود آمده !"]);
        }

        return redirect()->route('manager.blogs')->with(['success' => true, "message" => 'عملیات با موفقیت انجام شد .']);
    }

    public function render()
    {
        $topics = BlogTopic::all();
        return view('livewire.managers.blogs.blogs.blog-create', ['topics' => $topics])->layout('livewire.layouts.managers');
    }
}

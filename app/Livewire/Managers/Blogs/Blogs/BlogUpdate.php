<?php

namespace App\Livewire\Managers\Blogs\Blogs;

use App\Models\Blog;
use App\Models\BlogTopic;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogUpdate extends Component
{
    use WithFileUploads;

    public Blog $blog;
    public $topic_id;
    public $subject;
    public $short_description;
    public $description;
    public $image;

    public function mount()
    {
        $this->topic_id = strval($this->blog->topic_id);
        $this->subject = $this->blog->subject;
        $this->short_description = $this->blog->short_description;
        $this->description = $this->blog->description;
    }

    public function rules()
    {
        return [
            "topic_id" => "required|integer",
            "subject" => "required|string",
            "short_description" => "required|string",
            "description" => "required|string",
            "image" => "nullable|image",
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

    public function store()
    {
        $validate = $this->validate();

        try {

            $validate['image'] = (isset($this->image)) ? $this->image->store('blog-image', 'public') : $this->blog->image;
            $validate['topic_id'] = intval($this->topic_id);
            $this->blog->update($validate);

        } catch (\Exception $e) {
            response_log('error', 'error in update blog from admin panel !', $e->getMessage());
            return back()->with(['error' => true, "message" => "مشکلی در فرآیند ویرایش مقاله به وجود آمده !"]);
        }

        return redirect()->route('manager.blogs')->with(['success' => true, "message" => 'عملیات با موفقیت انجام شد .']);
    }

    public function render()
    {
        $topics = BlogTopic::all();
        return view('livewire.managers.blogs.blogs.blog-update', ['topics' => $topics])->layout('livewire.layouts.managers');
    }
}

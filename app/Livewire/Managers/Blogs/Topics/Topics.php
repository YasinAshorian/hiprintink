<?php

namespace App\Livewire\Managers\Blogs\Topics;

use App\Models\BlogTopic;
use App\Models\Service;
use App\Models\Topic;
use Livewire\Component;
use Livewire\WithPagination;

class Topics extends Component
{
    use  WithPagination;

    public $name;

    public $isUpdate = false;
    public $isOpen = false;

    public $topic;

    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }


    public function create()
    {
        $validate = $this->validate();

        try {

            BlogTopic::query()->create($validate);
            $this->isOpen = false;
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in create topic', $e->getMessage());
            $this->isOpen = false;
            $this->unset();
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند ثبت دسته بندی  به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'ثبت دسته بندی  با موفقیت انجام شد.']);
    }


    public function setUpdate($value)
    {
        $this->isUpdate = true;
        $this->isOpen = true;
        $this->topic = BlogTopic::find($value);

        $this->name = $this->topic->name;
    }

    public function update()
    {
        $validate = $this->validate();

        try {

            BlogTopic::query()->where('id', $this->topic->id)->update($validate);
            $this->isOpen = false;
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in update topic', $e->getMessage());
            $this->isOpen = false;
            $this->unset();
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند ویرایش دسته بندی  به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'ویرایش دسته بندی  با موفقیت انجام شد.']);

    }

    public function delete($value)
    {
        try {
            BlogTopic::query()->where('id', $value)->delete();

        } catch (\Exception $e) {
            response_log('error', 'error in delete topic', $e->getMessage());
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند حذفدسته بندی  به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'حذف دسته بندی  با موفقیت انجام شد.']);
    }

    public function setIsUpdate($value)
    {
        $this->isUpdate = $value;
        $this->isOpen = true;
    }


    public function setDialog($value)
    {
        $this->isOpen = $value;
    }

    public function render()
    {
        $topics = BlogTopic::query()->paginate(15);
        return view('livewire.managers.blogs.topics.topics', ['topics' => $topics])->layout('livewire.layouts.managers');
    }

    private function unset()
    {
        $this->name = null;
    }
}

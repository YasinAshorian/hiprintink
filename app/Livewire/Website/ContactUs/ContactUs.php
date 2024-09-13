<?php

namespace App\Livewire\Website\ContactUs;

use Livewire\Component;
use Livewire\WithFileUploads;
use SebastianBergmann\Diff\Exception;

class ContactUs extends Component
{
    use WithFileUploads;

    public $full_name;
    public $phone_number;
    public $subject;
    public $description;
    public $file;

    public function store()
    {
        $validate = $this->validate([
            "full_name" => "required|string",
            "phone_number" => "required|string",
            "subject" => "required|string",
            "description" => "required|string",
            "file" => "nullable|string",
        ], [
            "full_name" => "نام و نام خانوادگی خود را به درستی وارد نمایید .",
            "phone_number" => "شماره تلفن خود را به درستی وارد نمایید .",
            "subject" => "موضوع درخواست خود را به درستی وارد نمایید.",
            "description" => "توضیحات مورد نظر خود را به درستی وارد نمایید .",
            "file" => "فایل خود را به درستی وارد نمایید .",
        ]);


        try {

            $validate['file'] = is_null($this->file) ? null : $this->file->store('contact-us', 'public');
            \App\Models\ContactUs::query()->create($validate);

            $this->full_name = null;
            $this->phone_number = null;
            $this->subject = null;
            $this->description = null;
            $this->file = null;

        } catch (Exception $exception) {
            response_log('error', 'error in contact-us from website !', $exception->getMessage());
            return back()->with(['error' => true, 'message' => "مشکلی در فرآیند ثبت درخواست به وجود آمده ."]);
        }

        return redirect()->route('contact-us')->with(['success' => true, 'message' => "درخواست شما به موفقیت ثبت شد."]);
    }

    public function render()
    {
        return view('livewire.website.contact-us.contact-us');
    }
}

<?php

namespace App\Livewire\Managers\Sliders;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sliders extends Component
{
    use WithFileUploads;

    public $isOpenManual = false;
    public $file;
    public  $prePage = 15;

    public function save()
    {
        $this->validate([
            'file' => 'required|image',
        ]);

        try {

            $originalFilename = $this->file->getClientOriginalName();
            $newFilename = uniqid() . '-' . time() . '.' . $originalFilename;

            // Store the file with the new filename
            $path = $this->file->storeAs('sliders', $newFilename, 'public');

            Slider::query()->create([
                'path' => $path
            ]);

            $this->file = null;
            $this->setModalStatus(false);

        } catch (\Exception $exception) {
            $this->setModalStatus(false);
            response_log('error', 'error in store a new slider !', $exception->getMessage());
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند آپلود تصویر به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'تصویر با موفقیت آپلود شد .']);
    }


    public function delete($id)
    {

        try {
            $slider = Slider::find($id);
            $slider->delete();

        } catch (\Exception $exception) {
            response_log('error', 'error in delete slider !', $exception->getMessage());
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند حذف تصویر به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'تصویر با موفقیت حذف شد .']);
    }

    public function setModalStatus($value)
    {
        $this->isOpenManual = $value;
    }

    public function render()
    {

        $sliders = Slider::query()->latest()->paginate($this->prePage);

        return view('livewire.managers.sliders.sliders', ['sliders' => $sliders])->layout('livewire.layouts.managers');
    }
}

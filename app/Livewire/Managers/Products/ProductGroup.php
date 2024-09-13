<?php

namespace App\Livewire\Managers\Products;

use App\Helper\ActivityLogger;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ProductGroup extends Component
{
    use  WithPagination;


    public $name;
    public $status = 'active';
    public $isUpdate = false;
    public $isOpen = false;

    public $productGroup;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'status' => 'required|string',
        ];
    }


    public function create()
    {
        $validate = $this->validate();

        try {

            \App\Models\ProductGroup::query()->create($validate);
            $this->isOpen = false;
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in create productGroups from admin panel', $e->getMessage());
            $this->isOpen = false;
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند ثبت گروه محصولات  به وجود آمده ! ']);
        }

        return back()->with(['success' => true, 'message' => 'ثبت گروه محصولات  با موفقیت انجام شد.']);
    }

    public function setUpdate($value)
    {
        $this->isUpdate = true;
        $this->isOpen = true;
        $this->productGroup = \App\Models\ProductGroup::find($value);
        $this->name = $this->productGroup->name;
        $this->status = $this->productGroup->status;
    }

    public function update()
    {
        $validate = $this->validate();

        try {

            \App\Models\ProductGroup::query()->where('id', $this->productGroup->id)->update($validate);
            $this->isOpen = false;
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in update productGroup from admin panel  !', $e->getMessage());
            $this->isOpen = false;
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند ویرایش گروه محصولات  به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'ویرایش گروه محصولات  با موفقیت انجام شد.']);

    }

    public function delete($value)
    {
        try {

            $p_Group = \App\Models\ProductGroup::query()->where('id', $value)->first();
            $p_g_items = \App\Models\ProductGroupItem::query()->where('product_group_id', $p_Group->id)->get();

            foreach ($p_g_items as $item) {
                $item->products()->delete();
                $item->delete();
            }

            $p_Group->delete();
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in delete product Group from admin panel !', $e->getMessage());
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند حذف گروه محصولات  به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'حذف گروه محصولات با موفقیت انجام شد.']);
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

    public function changeStatus($id, $status)
    {

        try {
            $user = \App\Models\ProductGroup::query()->where('id', $id)->first();
            $user->status = $status;
            $user->save();

        } catch (\Exception $exception) {
            response_log('error', 'error in change ProductGroup status ', $exception->getMessage());
            return back()->with(['error' => true, 'message' => 'عملیات با مشکل مواجه شد !']);
        }


        return back()->with(['success' => true, 'message' => 'عملیات با موفقیت انجام شد .']);

    }

    public function render()
    {
        $productGroups = \App\Models\ProductGroup::query()->paginate(15);

        return view('livewire.managers.products.product-group', ['productGroups' => $productGroups])->layout('livewire.layouts.managers');
    }

    private function unset()
    {
        $this->name = null;
        $this->status = 'active';
    }
}


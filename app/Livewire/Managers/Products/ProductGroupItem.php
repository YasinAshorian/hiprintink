<?php

namespace App\Livewire\Managers\Products;

use Livewire\Component;
use Livewire\WithPagination;

class ProductGroupItem extends Component
{
    public \App\Models\ProductGroup $productGroup;

    use  WithPagination;


    public $name;
    public $product_group_id;
    public $isUpdate = false;
    public $isOpen = false;

    public $productGroupItem;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'product_group_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'نام دسته بندی را به درستی وارد نمایید .',
            'product_group_id' => 'گروه محصول را به درستی وارد نمایید .',
        ];
    }


    public function create()
    {
        $validate = $this->validate();

        try {

            \App\Models\ProductGroupItem::query()->create($validate);
            $this->isOpen = false;
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in create productGroupItem from admin panel', $e->getMessage());
            $this->isOpen = false;
            $this->unset();
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند ثبت دسته بندی   به وجود آمده ! ']);
        }

        return back()->with(['success' => true, 'message' => 'ثبت دسته بندی   با موفقیت انجام شد.']);
    }

    public function setUpdate($value)
    {
        $this->isUpdate = true;
        $this->isOpen = true;
        $this->productGroupItem = \App\Models\ProductGroupItem::find($value);
        $this->name = $this->productGroupItem->name;
        $this->product_group_id = $this->productGroupItem->product_group_id;
    }

    public function update()
    {
        $validate = $this->validate();

        try {

            \App\Models\ProductGroupItem::query()->where('id', $this->productGroupItem->id)->update($validate);
            $this->isOpen = false;
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in update productGroupItem from admin panel  !', $e->getMessage());
            $this->isOpen = false;
            $this->unset();
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند ویرایش دسته بندی   به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'ویرایش دسته بندی   با موفقیت انجام شد.']);

    }

    public function delete($value)
    {
        try {

            $ProductGroupItem = \App\Models\ProductGroupItem::query()->where('id', $value)->first();
            $ProductGroupItem->products()->delete();
            $ProductGroupItem->delete();
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in delete product Group Item from admin panel !', $e->getMessage());
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند حذف دسته بندی   به وجود آمده !']);
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
        $productGroupItems = \App\Models\ProductGroupItem::query()->where('product_group_id', $this->productGroup->id)->paginate(15);
        $productGroups = \App\Models\ProductGroup::query()->get();

        return view('livewire.managers.products.product-group-item', ['productGroupItems' => $productGroupItems, 'productGroups' => $productGroups])->layout('livewire.layouts.managers');
    }

    private function unset()
    {
        $this->name = null;
        $this->product_group_id = null;
    }

}

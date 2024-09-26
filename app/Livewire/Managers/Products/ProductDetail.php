<?php

namespace App\Livewire\Managers\Products;

use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Component;
use Livewire\WithFileUploads;
use function PHPUnit\Framework\isNull;

class ProductDetail extends Component
{
    use WithFileUploads;

    public $product;
    public $create = false;
    public $productGroupItems;
    public $product_group_item_id;
    public $name;
    public $short_description;
    public $description;
    public $images = [];
    public $status;
    public $price;
    public $top_products;
    public $pictures = [];

    public function mount()
    {
        if ($this->product == 0) {
            $this->create = true;
        } else {
            $this->create = false;
            $this->product = Product::find($this->product);
            $this->product_group_item_id = $this->product->product_group_item_id;
            $this->name = $this->product->name;
            $this->short_description = $this->product->short_description;
            $this->description = $this->product->description;
            $this->pictures = $this->product->pictures;
            $this->status = $this->product->status;
            $this->top_products = ($this->product->top_products);
            $this->price = $this->product->price;

        }
    }

    public function rules()
    {
        return [
            "product_group_item_id" => "required|integer",
            "name" => "required|string",
            "short_description" => "nullable|string",
            "description" => "nullable|string",
            "images" => "nullable|array",
            "status" => "required|string",
            "top_products" => "required|boolean",
            "price" => "required|integer",
        ];
    }

    public function messages()
    {
        return [
            "product_group_item_id" => "دسته بندی محصول را به درستی انتخاب کنید .",
            "name" => "نام محصول را به درستی وارد نمایید .",
            "short_description" => "توضیح کوتاه راجب محصول خود بنویسید.",
            "description" => "توضیحات محصول خود بنویسید.",
            "images.*" => "تصاویر محصول خود را به درستی وارد کنید.",
            "status" => "وضعیت محصول خود را به درستی انتخاب کنید.",
            "top_products" => "نمایش در محصولات برتر را به درستی انتخاب کنید.",
            "price" => "هزینه محصول را به درستی وارد نمایید .",
        ];
    }

    public function productGroupItemId()
    {
        $this->product_group_item_id = filter_var($this->product_group_item_id, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }

    public function store()
    {
        $validate = $this->validate();

        try {
            unset($validate['images']);
            $validate['top_products'] = filter_var($this->top_products, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
            $product = Product::query()->create($validate);

            /** save images */
            foreach ($this->images as $image) {
                $path = $image->store('product_pictures', 'public');
                $product->pictures()->create(['path' => $path]);
            }

        } catch (\Exception $e) {
            response_log('error', 'error in create new product !', $e->getMessage());
            return back(['error' => true, 'message' => 'مشکلی در فرآیند افزودن محصول به وجود آمده !']);
        }

        return redirect()->route('managers.products')->with(['success' => true, 'message' => 'محصول با موفقیت افزوده شد !']);
    }

    public function update()
    {

        $validate = $this->validate();

        try {
            unset($validate['images']);
            $validate['top_products'] = filter_var($this->top_products, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
            $this->product->update($validate);

            if (!empty($this->images)) {

                /** save images */
                foreach ($this->images as $image) {
                    $path = $image->store('product_pictures', 'public');
                    $this->product->pictures()->create(['path' => $path]);
                }
            }

        } catch (\Exception $e) {
            response_log('error', 'error in update product !', $e->getMessage());
            return back(['error' => true, 'message' => 'مشکلی در فرآیند ویرایش محصول به وجود آمده !']);
        }

        return redirect()->route('managers.products')->with(['success' => true, 'message' => 'محصول با موفقیت ویرایش شد !']);
    }

    public function deleteImg($id)
    {
        ProductImage::query()->where('id', $id)->delete();
        $this->pictures = $this->product->pictures;
        return back();
    }

    public function render()
    {
        $p_g_items = \App\Models\ProductGroupItem::all();

        return view('livewire.managers.products.product-detail', ["p_g_items" => $p_g_items])
            ->layout('livewire.layouts.managers');
    }
}

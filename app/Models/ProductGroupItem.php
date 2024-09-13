<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGroupItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_group_id',
        'name'
    ];

    public function productGroup()
    {
        return $this->hasOne(ProductGroup::class, 'id', 'product_group_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'product_group_item_id', 'id');
    }
}

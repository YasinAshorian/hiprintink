<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE = 'active';
    const STATUS_IN_ACTIVE = 'Inactive';
    protected $fillable = [
        'product_group_item_id',
        'name',
        'short_description',
        'description',
        'status',
        'top_products',
    ];


    public function productGroupItem()
    {
        return $this->hasOne(ProductGroupItem::class, 'id', 'product_group_item_id');
    }

    public function pictures()
    {
        return $this->hasMany(ProductImage::class, 'p_id', 'id');
    }

}

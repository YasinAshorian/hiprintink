<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGroup extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE = 'active';
    const STATUS_IN_ACTIVE = 'Inactive';

    protected $fillable = [
        'name',
        'status'
    ];


    public function productItems()
    {
        return $this->hasMany(ProductGroupItem::class, 'product_group_id', 'id');
    }
}

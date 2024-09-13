<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'topic_id',
        'subject',
        'short_description',
        'description',
        'image',
    ];

    public function topic()
    {
        return $this->hasOne(BlogTopic::class, 'id', 'topic_id');
    }
}

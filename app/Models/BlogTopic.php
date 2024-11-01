<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogTopic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'topic_id', 'id');
    }
}

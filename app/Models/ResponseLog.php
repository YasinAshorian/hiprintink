<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'message',
        'data',
    ];

    protected $casts = [
        'data' => 'array'
    ];

}

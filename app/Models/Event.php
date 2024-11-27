<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'start', 'end', 'category_id', 'image'];

    // Chuyển đổi các trường 'start' và 'end' thành đối tượng Carbon
    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];
}


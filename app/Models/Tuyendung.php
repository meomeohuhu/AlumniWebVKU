<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuyendung extends Model
{
    use HasFactory;

    protected $fillable = ['content','title','salary', 'location', 'experience', 'time', 'status', 'category_id', 'image'];
    protected $table = 'Tuyendung';
}

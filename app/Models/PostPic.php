<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostPic extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'image',
        'description' => 'Không có chú thích gì khác về ảnh này'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [
        'title',
        'thumbnail',
        'category_id',
        'content',
        'is_headline',
        'status',

    ];

    public static $rules = [
        'title' => 'required',
        'thumbnail' => 'required',
        'category_id' => 'required',
        'content' => 'required',
        'is_headline' => 'required',
        'status' => 'required',
    ];
}

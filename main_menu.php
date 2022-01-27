<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_menu extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'status',
        'content',
        'parent',
        'category',
        'file',
        'url',
        'order',

    ];

    public static $rules = [
        'title' => 'required',
        'status' => 'required',
        'content' => 'required',
        'parent' => 'required',
        'category' => 'required|in:link,file,content',
        'file' => 'required',
        'url' => 'required',
        'order' => 'required',


    ];
}

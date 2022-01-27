<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'image'
    ];

    public static $rules = [
        'name' => 'required',
        'image' => 'required'
    ];
    public static function listCategory($id='', $sel='')
    {
        $cats = self::get();
        $html = "<select id='$id' name='$id' style='width:100%'>";
        foreach($cats as $cat) {
            $html .="<option value='$cat->id'>$cat->name</option>";
        }
        $html .="</select>";
        return $html;
    }
}

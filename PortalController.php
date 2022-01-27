<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Category;
use\App\Models\post;
use\App\Models\slider;
use\App\Models\User;
use\App\Models\comment;
use\App\Models\main_menu;

class PortalController extends Controller
{
    public function index()

    {
        $data['slider']   = Slider::where('status', 1)->get();
        $data['posts']    = Post::where('status', 1)->get();
        $data['lateposts']    = Post::where('status', 1)->limit(5)->get();


        $data['headline']    = Post::where('status', 1)->where('is_headline', 1)->get();
        $data['user']    = User::first();
        $data['category']    = Category::get();

        return view('portal.index', compact('data'));


    }




    public function about()
    {

    }
}

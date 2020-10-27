<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use App\Slider;
use App\Gallery;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $galleries = Gallery::all();
        $event = Event::all();
        $news = News::all();
        $slide = Slider::all();
        return view('admin.home',compact('categories','news','galleries','slide','event'));
    }
}
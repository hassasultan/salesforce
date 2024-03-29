<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use App\Models\AboutSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting = HomeSetting::first();
        return view('home',compact('setting'));
    }
    public function about()
    {
        $setting = AboutSetting::first();
        return view('about',compact('setting'));
    }
}

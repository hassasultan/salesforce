<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use App\Traits\SaveImage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    use SaveImage;
    public function index()
    {
        $setting = HomeSetting::first();
        return view('admin.pages.home',compact('setting'));
    }
    public function home_setting(Request $request)
    {
        $setting = HomeSetting::first();
        if($setting != null)
        {
            $data = $request->except(['_token']);
            $data['slider_image'] = $this->slider_image($request->slider_image);
            $data['content_left_image'] = $this->content_left_image($request->content_left_image);
            $data['content_right_image'] = $this->content_right_image($request->content_right_image);
            $setting->update($data);
        }
        else
        {
            $data = $request->all();
            $data['slider_image'] = $this->slider_image($request->slider_image);
            $data['content_left_image'] = $this->content_left_image($request->content_left_image);
            $data['content_right_image'] = $this->content_right_image($request->content_right_image);
            HomeSetting::create($data);
        }
        return redirect()->route('admin.home');
    }
}

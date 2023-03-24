<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use App\Models\AboutSetting;
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
            if($request->has('slider_image'))
            {
                $data['slider_image'] = $this->slider_image($request->slider_image);
            }
            if($request->has('content_left_image'))
            {
                $data['content_left_image'] = $this->content_left_image($request->content_left_image);
            }
            if($request->has('content_right_image'))
            {
                $data['content_right_image'] = $this->content_right_image($request->content_right_image);
            }
            $setting->update($data);
        }
        else
        {
            $data = $request->all();
            if($request->has('slider_image'))
            {
                $data['slider_image'] = $this->slider_image($request->slider_image);
            }
            if($request->has('content_left_image'))
            {
                $data['content_left_image'] = $this->content_left_image($request->content_left_image);
            }
            if($request->has('content_right_image'))
            {
                $data['content_right_image'] = $this->content_right_image($request->content_right_image);
            }
            HomeSetting::create($data);
        }
        return redirect()->route('admin.home');
    }
    public function about()
    {
        $setting = AboutSetting::first();
        return view('admin.pages.about',compact('setting'));
    }
    public function about_setting(Request $request)
    {
        $setting = AboutSetting::first();
        if($setting != null)
        {
            $data = $request->except(['_token']);
            if($request->has('banner'))
            {
                $data['banner'] = $this->banner($request->banner);
            }
            $setting->update($data);
        }
        else
        {
            $data = $request->all();
            if($request->has('banner'))
            {
                $data['banner'] = $this->banner($request->banner);
            }
            AboutSetting::create($data);
        }
        return redirect()->route('admin.about');
    }
}

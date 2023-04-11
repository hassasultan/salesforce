<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SaveImage
{
    /**
     * Set slug attribute.
     *
     * @param string $value
     * @return void
     */
    public function slider_image($image)
    {
        // $this->attributes['slug'] = Str::slug($image, config('roles.separator'));
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image'.'/'.'slider_image/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image'.'/'.'slider_image/'),$filenamenew);
        return $filenamepath;
    }

    public function content_left_image($image)
    {
        // $this->attributes['slug'] = Str::slug($image, config('roles.separator'));
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image'.'/'.'content_left_image/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image'.'/'.'content_left_image/'),$filenamenew);
        return $filenamepath;
    }

    public function content_right_image($image)
    {
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image'.'/'.'content_right_image/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image'.'/'.'content_right_image/'),$filenamenew);
        return $filenamepath;

    }
    public function banner($image)
    {
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image'.'/'.'banner/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image'.'/'.'banner/'),$filenamenew);
        return $filenamepath;

    }
    public function client_logo($image)
    {
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'client/image'.'/'.'img/'.$filenamenew;
        $filename       = $img->move(public_path('storage/client/image'.'/'.'img'),$filenamenew);
        return $filenamepath;

    }
}

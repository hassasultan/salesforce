<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    use HasFactory;
    protected $table = "home_setting";
    protected $fillable = [
        'slider_heading',
        'slider_image',
        'slider_description',
        'content_left_heading',
        'content_left_image',
        'content_left_description',
        'content_right_heading',
        'content_right_image',
        'content_right_description',
    ];
}

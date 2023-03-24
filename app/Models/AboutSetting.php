<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    use HasFactory;
    protected $table = "about_setting";
    protected $fillable = [
        'heading',
        'banner',
        'description',
        'heading_two',
        'tagline',
        'mission',
        'vision',
    ];
}

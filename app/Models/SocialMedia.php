<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'socialmedia';

    protected $fillable = [
        'fb', 'google', 'twitter', 'instagram'
    ];
}

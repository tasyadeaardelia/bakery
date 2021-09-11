<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Tags extends Model
{
    protected $table = 'post_tags';

    protected $fillable = [
        'postId', 'tagId'
    ];
}

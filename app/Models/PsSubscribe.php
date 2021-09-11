<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsSubscribe extends Model
{
    protected $table = 'ps_subscribe';

    protected $fillable = [
        'content', 'position'
    ];
    
}

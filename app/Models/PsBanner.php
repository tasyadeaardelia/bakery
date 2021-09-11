<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsBanner extends Model
{
    protected $table = 'ps_banner';
    protected $fillable = [
        'image', 'caption', 'description', 'status'
    ];
}

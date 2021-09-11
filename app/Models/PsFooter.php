<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsFooter extends Model
{
    protected $table = 'ps_footer';
    protected $fillable = [
        'title','content', 'located'
    ];
}

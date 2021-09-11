<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsEmail extends Model
{
    protected $table = 'subs_email';

    protected $fillable = [
        'title', 'description', 'placeholder_form', 'button_name'
    ];
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    protected $table = 'worktime';
    protected $fillable = [
        'open', 'timeopen', 
        'close', 'timeclose', 'status'
    ];
}

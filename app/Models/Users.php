<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'profil',
    ]; 

    protected $hidden = [
        'password',
    ];

    // public function posts () 
    // {
    //     return $this->hasMany(Post::class, 'authorId', 'id');
    // }
    
}

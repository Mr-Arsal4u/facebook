<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facebook extends Model
{
    protected $table = 'facebook_users';

    protected $fillable = [
        'name',
       'password'
    ];
}

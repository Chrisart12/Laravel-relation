<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $fillable = ['number', 'users_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

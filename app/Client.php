<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function commandes()
    {
        return $this->hasMany('App\Commande');
    }

    public function adresses()
    {
        return $this->hasMany('App\Adress');
    }
}

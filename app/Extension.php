<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    protected $guarded = [];

    public function files()
    {
        return $this->hasMany('App\File', 'extension_id', 'id');
    }
}

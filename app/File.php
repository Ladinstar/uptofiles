<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    public function extension()
    {
        return $this->hasOne('App\Extension', 'id', 'extension_id');
    }
}

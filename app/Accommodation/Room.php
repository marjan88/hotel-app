<?php

namespace MyCompany\Accommodation;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $table = 'rooms';
    public $timestamps = false;

    public function accommodation()
    {
        return $this->belongsTo('\MyCompany\Accommodation\Accommodation');
    }

}

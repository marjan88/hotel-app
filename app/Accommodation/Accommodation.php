<?php

namespace MyCompany\Accommodation;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{

    protected $table = 'accommodations';
    public $timestamps = false;

    public function rooms()
    {
        return $this->hasMany('\MyCompany\Accommodation\Room');
    }

}

<?php

namespace MyCompany\Accommodation\Location;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $filable = ['name'];
    public $timestamps = false;
}

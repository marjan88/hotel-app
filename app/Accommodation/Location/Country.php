<?php

namespace MyCompany\Accommodation\Location;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $filable = ['name'];
    public $timestamps = false;
}

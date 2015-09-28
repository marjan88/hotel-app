<?php

namespace MyCompany\Accommodation;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $filable = ['name'];
    public $timestamps = false;
}

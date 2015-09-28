<?php

namespace MyCompany\Accommodation\Location;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $filable = ['name'];
    public $timestamps = false;
}

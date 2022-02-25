<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $timestamps = false;
   // public $fillable = ['name','age'];
    protected $table='student_registration';
}

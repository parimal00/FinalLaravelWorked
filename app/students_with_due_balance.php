<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students_with_due_balance extends Model
{
    public $timestamps = false;
   // public $fillable = ['name','age'];
    protected $table='students_with_due_balance';
}

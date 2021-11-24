<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "student";

    public $fillable = ['name','roll_no','class','paper_code','pdf'];
}

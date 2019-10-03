<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Qualification extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qualifications_id', 'employees_id','aquired','grade', 
    ];
}

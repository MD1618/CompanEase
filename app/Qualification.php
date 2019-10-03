<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Qualification extends Model
{
    //
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];

    public function student()
    {
        return $this->belongsToMany(Employee::class)->withPivot('aquired', 'grade');
    }
}

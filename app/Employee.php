<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Qualification;

class Employee extends Model
{
    //


/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'phone',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'employeePhotos/avatarBlank.png';
        return $imagePath;
    }


    public function qualified()
    {
        return $this->belongsToMany(Qualification::class)->withPivot('aquired', 'grade');
    }
}

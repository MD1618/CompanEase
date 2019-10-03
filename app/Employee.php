<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        $imagePath = ($this->image) ? $this->image : '/storage/employeePhotos/avatarBlank.png';
        return $imagePath;
    }
}

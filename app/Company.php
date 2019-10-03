<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'logo','website',
    ];


    public function employees(){
        return $this->hasMany(Employee::class);
    }


    public function logoImage()
    {
        $imagePath = ($this->logo) ? $this->logo : 'companyLogos/imageSoon.jpg';
        return $imagePath;
    }
}

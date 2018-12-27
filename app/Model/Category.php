<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    //Mass Assignment
    protected $guarded = [];

    //To show 1 Category not using its id but using slug
    public function getRouteKeyName()  {
        return 'slug';
    }
}

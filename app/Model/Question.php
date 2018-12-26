<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //To show 1 question not using its id but using slug
    public function getRouteKeyName()  {
        return 'slug';
    }
     //Storing a new question into the database
     protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];
    //protected $guarded = [];
}

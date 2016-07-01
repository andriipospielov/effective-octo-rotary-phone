<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function setImageAttribute($value){
        echo 1234;
    }

    
    
    protected $fillable = [
        'image_url',
        'description',
        'user_id'
    ];
    
    

//An article is owned by a user
//one-to-one relation
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

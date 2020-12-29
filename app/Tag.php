<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'style'];


    public function hobbies() {
        $this->belongsToMany('App\Hobby');
    }

}

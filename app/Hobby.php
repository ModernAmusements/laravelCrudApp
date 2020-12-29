<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $fillable = ['name', 'beschreibung'];

    public function user() {
        $this->belongsTo('App\User');
    }
    public function tags() {
        $this->belongsToMany('App\Tag');
    }
}

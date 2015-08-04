<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creative extends Model
{
    protected $table = 'creatives';

    public function getId(){
        return $this->id;
    }
    public function getFullName(){
        return $this->firstname.' '.$this->lastname;
    }
    public function getUser(){
        $user = User::where('id', '=', $this->user_id)->first();
        return $user;
    }
    /* Eloquent ORM */
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function applicants(){
        return $this->hasMany('App\JobApply');
    }
}

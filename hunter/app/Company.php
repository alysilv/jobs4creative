<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function getFullName(){
        return $this->fullname;
    }
    public function getId(){
        return $this->id;
    }
    public function getLogo(){
        return $this->logo;
    }
    public function getUser(){
        $user = User::where('id', '=', $this->user_id)->first();
        return $user;
    }

    /* Eloquent ORM */
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function jobs(){
        return $this->hasMany('App\Job', 'company_id', 'id');
    }
    public function creatives(){
        return $this->hasMany('App\Creative');
    }

    public function job_applicants(){
        return $this->hasMany('App\JobApply', 'job_id', 'id');
    }

}

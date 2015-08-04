<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    public function getId(){
        return $this->id;
    }
    public function getCompanyId(){
        return $this->company_id;
    }
    public function getCompany(){
        $company = Company::where('id', '=', $this->company_id)->first();
        return $company;
    }

    /* Eloquent ORM */
    public function companies(){
        return $this->belongsTo('App\Company');
    }

    public function skills(){
        return $this->hasMany('App\JobSkill');
    }
    public function job_levels(){
        return $this->hasMany('App\JobLevel');
    }
    public function job_types(){
        return $this->hasMany('App\JobType');
    }
    public function applicants(){
        return $this->hasMany('App\JobApply');
    }
}

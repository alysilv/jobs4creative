<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model {

	protected $table = 'job_skills';

    public function job(){
        return $this->belongsTo('App\Job');
    }

}

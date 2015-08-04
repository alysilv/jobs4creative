<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApply extends Model {

    protected $table = 'job_applicants';

    public function job(){
        return $this->belongsTo('App\Job');
    }
    public function creative(){
        return $this->belongsTo('App\Creative');
    }

}

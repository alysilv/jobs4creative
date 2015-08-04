<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model {

	protected $table = 'job_types';

    public function getTypeId(){
        return $this->type_id;
    }
    public function type(){
        return $this->belongsTo('App\Type', 'type_id', 'id');
    }
    public function job(){
        return $this->belongsTo('App\Job', 'job_id', 'id');
    }

}

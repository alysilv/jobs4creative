<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JobLevel extends Model {

	protected $table = 'job_levels';

    public function getLevelId(){
        return $this->level_id;
    }

    public function level(){
        return $this->belongsTo('App\Level', 'level_id', 'id');
    }
    public function job(){
        return $this->belongsTo('App\Job', 'job_id', 'id');
    }

}

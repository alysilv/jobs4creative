<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'role_id', 'status_id', 'is_searchable'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function getId(){
        return $this->id;
    }
    public function getRoleId(){
        return $this->role_id;
    }
    public function getStatusId(){
        return $this->status_id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCompany(){
        $company = Company::where('user_id', '=', $this->id)->first();
        return $company;
    }
    public function getCreative(){
        $creative = Creative::where('user_id', '=', $this->id)->first();
        return $creative;
    }

    /* Eloquent ORM */
    public function role(){
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }
    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function company(){
        return $this->hasOne('App\Company');
    }

    public function creative(){
        return $this->hasOne('App\Creative');
    }





}

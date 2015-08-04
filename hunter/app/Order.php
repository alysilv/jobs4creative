<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';

    public function package(){
        return $this->hasOne('App\Package');
    }

    public function getCompany(){
        $company = Company::where('id','=',$this->company_id)->first();
        return $company;
    }

}

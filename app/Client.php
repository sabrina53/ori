<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
        protected $fillable = [
        'id', 'company_name', 'client_fname','client_lname','user_id','business_type','address','number','email'
    ];



public function projects(){
	return $this->hasMany('App\Project');
}

public function user(){
	return $this->belongsTo('App\User');
}

}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
      protected $fillable = [
        'id', 'project_name','project_descrip','estimated_due_date','invoice_id','id_contract','client_id','quote_id','completion_status','payment_status','start_date','end_date','discount','total','total_perc','total_date','pay_perc_one','pay_perc_two','tax','item_name','item_name_two','item_name_three','item_amount','item_amount_two','item_amount_three','payment_one_date','payment_two_date','issued'
    ];
    public function client(){
	return $this->belongsTo('App\Client');
}

}
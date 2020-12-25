<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
	 protected $table ='salary';
    protected $fillable =['employee_id','basic_pay','per_allow','ot','bonus','absence','donate','net_pay'];

      public function viewEmployee()
    {
    	return $this->hasOne('App\Employee','id','employee_id');
    }
}

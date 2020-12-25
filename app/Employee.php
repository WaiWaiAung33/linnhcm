<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     protected $table ='employee';
    protected $fillable =['branch_id','dep_id','position_id','name','father_name','phone_no','nrc','date_of_birth','join_date','address','salary','photo'];

    public function viewBranch()
    {
    	return $this->hasOne('App\Branch','id','branch_id');
    }

     public function viewDepartment()
    {
    	return $this->hasOne('App\Department','id','dep_id');
    }

       public function viewPosition()
    {
    	return $this->hasOne('App\Position','id','position_id');
    }
}

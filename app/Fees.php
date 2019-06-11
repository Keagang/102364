<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
	const CREATED_AT = 'date_of_payment';
	
    /**
     * The primary key associated with the fees.
     *
     * @var string
     */
    protected $primaryKey = 'id';

	/**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
         'amount',  'student_details', 'student_id'
    ];
    /**
     * Get the student that owes the fees.
     */
    public function student()
    {
        return $this->belongsTo('App\Student','student_id','student_number');
    }
}

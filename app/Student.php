<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_number';
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'full_name', 'dob', 'address', 'details', 'student_number'
    ];

    /**
     * Get the fees associated with the student.
     */
    public function fees()
    {
        return $this->hasMany('App\Fees','student_id');
        // 
    }
  
}

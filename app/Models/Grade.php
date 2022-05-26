<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable =[

      'course_name',
      'student_id',
      'supervisor_name',
      'supervisor_id',
      'section',
      'grade',

    ];
    protected $hidden = [

    ];
    public function student(){
      return $this->belongsTo('App\Models\student');
    }

}

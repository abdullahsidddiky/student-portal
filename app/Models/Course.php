<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  use HasFactory;
  protected $fillable =[
    'supervisor_id',
    'supervisor_name',
    'course_name',
    'section',

  ];
  protected $hidden = [

  ];
  public function belogns_to_supervisor(){
      return $this->belognsTo('App\Models\Supervisor');
  }

}

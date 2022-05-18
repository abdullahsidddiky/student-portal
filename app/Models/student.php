<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable =[
      'name',
      'email',
    ];
    protected $hidden = [

    ];
    public function add_student(){
          return $this->belongsTo('App\Models\User');
    }
}

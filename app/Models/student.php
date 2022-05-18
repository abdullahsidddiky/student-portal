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
    public function user(){
          return $this->belongsTo('App\Models\User');
    }
    public function grade(){
          return $this->hasMany('App\Models\Grade');
    }
}

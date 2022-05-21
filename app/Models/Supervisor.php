<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'email'
    ];
    protected $hidden = [

    ];
    public function user(){
        return $this->belognsTo('App\Models\User');
    }
    public function courses(){
      return $this->hasMany('App\Models\Course');
    }
}

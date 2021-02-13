<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	  'id','name','email','phone','subject','message','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    protected $table = 'contacts';
}
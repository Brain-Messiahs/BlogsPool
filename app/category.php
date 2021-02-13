<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	  'id','category_name','reg_id','date','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    protected $table = 'categories';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	  'id','cat_id','tag','clicks','reg_id','active' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    protected $table = 'tags';
}

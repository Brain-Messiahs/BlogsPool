<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image_file extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	  'id','author_id','author_name','url','active' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    protected $table = 'image_files';
}
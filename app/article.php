<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id','title','description','image','content','author_id','author_name','category_id','category_name','publish_time','tags','clicks','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    protected $table = 'articles';
}

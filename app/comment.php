<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	  'id','article_id','name','comment','time','likes','dislikes','reply_cnt','reply_data','active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    protected $table = 'comments';
}

<?php

namespace App;

class Article extends Model
{
    
    public function user() 
    {
    	return $this->belongsTo(User::class);
    }
}

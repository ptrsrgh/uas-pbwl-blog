<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'photos_id';
    
    public function post(){
    	return $this->belongsTo('App\Post', 'photos_post_id');
    }
}

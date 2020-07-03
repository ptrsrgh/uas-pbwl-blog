<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'album_id';
    
    public function photos(){
    	return $this->belongsTo('App\Photos', 'album_photos_id');
    }
}

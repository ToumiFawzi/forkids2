<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public $table = 'responses';
    
    protected $fillable = [
        
       'content','date_publication','user_id','post_id'];
}

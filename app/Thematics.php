<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thematics extends Model
{
    public $table = 'posts';
    
    protected $fillable = [
        'content','date_creation','user_id','community_id' ];
}

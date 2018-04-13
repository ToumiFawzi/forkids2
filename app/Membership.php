<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    public $table = 'membership';
    
    protected $fillable = [
        'user_id','community_id' ];
}

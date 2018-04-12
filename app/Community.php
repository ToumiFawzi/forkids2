<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    public $table = 'community';
    
    protected $fillable = [
        'title','description','responsabe_id','date' ];
}

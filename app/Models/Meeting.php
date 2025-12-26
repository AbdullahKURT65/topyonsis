<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['organizer_id','unit_id','title','description','start_at','end_at','location','status'];
}

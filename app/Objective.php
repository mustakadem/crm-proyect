<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objective extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded=[
        'id','created_at','update_at'
    ];
}

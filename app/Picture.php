<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function cat_picture()
    {
        return $this->belongsTo('App\Category_picture');
    }
}
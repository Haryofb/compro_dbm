<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_picture extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function picture()
    {
        return $this->hasMany('App\Picture');
    }
}
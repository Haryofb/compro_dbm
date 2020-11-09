<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catpicture extends Model
{
    protected $table = 'category_pictures';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function picture()
    {
        return $this->hasMany(Picture::class);
    }
}
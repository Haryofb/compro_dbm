<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function catpicture()
    {
        return $this->belongsTo(Catpicture::class,'category_id');
    }
}
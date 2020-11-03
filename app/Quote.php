<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function divition()
    {
        return $this->belongsTo('App\Divition');
    }

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}

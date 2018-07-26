<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sub()
    {
        return $this->belongsTo(SubCategory::class, 'sub_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function ads()
    {
        return $this->hasMany(Ad::class, 'sub_id');
    }

    public static function links()
    {
        return self::all();
    }
}

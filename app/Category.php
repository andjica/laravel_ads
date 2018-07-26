<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function child()
    {
        return $this->hasMany(SubCategory::class, 'parent_id');
    }
}

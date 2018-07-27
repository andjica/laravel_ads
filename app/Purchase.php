<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $guarded = [];

    public function users()
    {
        return $this->hasOne(User::class);
    }

    public function acc()
    {
        return $this->hasOne(AccountType::class, 'bought');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oyulog extends Model
{
    protected $fillable = ['id','name', 'price', 'place', 'picture'];

    public function oyulog()
    {
        return $this->belongsTo(User::class);
    }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}

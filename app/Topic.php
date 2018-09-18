<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function reply()
    {
        return $this->hasMany('App\Reply');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];
    // One Reply Belongs To One Question

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // One Reply Blongs To One User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // One Reply Has Many Likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}

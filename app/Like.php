<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];

    // One like belongs to One reply
    public function like()
    {
        return $this->belongsTo(Reply::class);
    }

}

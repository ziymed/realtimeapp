<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // One Category Has Many Questions
    public function questions()
    {
        return $this->hasMany(Questions::class);
    }
    //
}

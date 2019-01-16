<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // One Question Belongs to One User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // One Question Has Many Replies
    public function replies()
    {
        return $this->hasMany(Reply::calss);
    }

    // One Question Belongs to One Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}

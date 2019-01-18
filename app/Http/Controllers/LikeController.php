<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    public function like(Reply $reply)
    {
        $reply->likes()->create([
            // 'user_id' => auth()->id;
            'user_id' => '9'
        ]);
    }

    public function dislike(Reply $reply)
    {
        //$reply->likes()->where('user_id', auth()->id)->first()->delete();

        $reply->likes()->where('user_id', '9')->first()->delete();
    }

}

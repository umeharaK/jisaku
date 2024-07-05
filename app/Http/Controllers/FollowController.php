<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Like;
use App\Follows;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;



class FollowController extends Controller
{
    public function __construct()
    {
      $this->middleware(['auth', 'verified'])->only(['follow', 'disfollow']);
    }
  
    
    // public function follow($user_id)
    // {
    //     Follows::create([
    //     'follow_id' => $user_id,
    //     'user_id' => Auth::id(),
    //   ]);
  
    //   return redirect()->back();
    // }
  
   
    // public function disfollow($user_id)
    // {
    //   $follow = Follows::where('follow_id', $user_id)->where('user_id', Auth::id())->first();
    //   $follow->delete();
  
  
    //   return redirect()->back();
    // }


    public function store($userId)
    {
        Auth::user()->follows()->attach($userId);
        return;
    }

    public function destroy($userId)
    {
        Auth::user()->follows()->detach($userId);
        return;
    }

}

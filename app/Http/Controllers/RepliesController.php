<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Like;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;



class RepliesController extends Controller
{

  public function __construct()
  {
    $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
  }


  public function like($id)
  {
    Like::create([
      'post_id' => $id,
      'user_id' => Auth::id(),
    ]);

    session()->flash('success', 'You Liked the Reply.');

    return redirect()->back();
  }

 
  public function unlike($id)
  {
    $like = Like::where('post_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();

    session()->flash('success', 'You Unliked the Reply.');

    return redirect()->back();
  }

}

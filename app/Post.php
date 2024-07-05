<?php

namespace App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','image','profire'.'episode'];

    public function likes()
    {
      return $this->hasMany(Like::class, 'post_id');
    }

    public function is_liked_by_auth_user()
    {
      $id = Auth::id();
  
      $likers = array();
      foreach($this->likes as $like) {
        array_push($likers, $like->user_id);
      }
  
      if (in_array($id, $likers)) {
        return true;
      } else {
        return false;
      }
    }

    public function follows()
    {
      return $this->hasMany(Follows::class, 'follow_id');
    }

    public function is_followed_by_auth_user()
    {
      $id = Auth::id();
  
      $follows = array();
      foreach($this->follows as $follow) {
        array_push($follows, $follow->user_id);
      }
  
      if (in_array($id, $follows)) {
        return true;
      } else {
        return false;
      }
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follows extends Model
{
    protected $fillable = ['follow_id','user_id'];

    public function follow()
    {
      return $this->belongsTo(Post::class);
    }
  
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function is_followed_by_auth_user()
    {
      $id = Auth::id();
  
      $follows = array();
      foreach($this->likes as $like) {
        array_push($follows, $follow->user_id);
      }
  
      if (in_array($id, $follows)) {
        return true;
      } else {
        return false;
      }
    }
}

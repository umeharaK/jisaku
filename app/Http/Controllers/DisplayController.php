<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Post;
use APP\Like;
use APP\Follow;
use APP\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;

class DisplayController extends Controller
{
    public function index(Post $post){

        $post = new Post;
        $all = $post->all()->toArray(); 

        return view ('main',['posts' => $all,] );
        
    }

    public function  postDetail(Post $post){

        
        return view('post_detail',['params' => $post,]);
 
    }

    public function postEdit(Post $post){
        return view('post_edit',['params' => $post,]);
 
    }

    public function mypage(Post $post){

        $post = Auth::user()->post()->get();
      

        return view ('mypage',['posts' => $post,] );
        
    }

    public function likelist(Post $post){

        $post = new Post;
        $all = $post->all()->toArray(); 
        $like = Auth::user()->like()->get();

        DB::table('posts')
         ->join('likes', 'photos.id', '=', 'favorites.photo_id')
         ->where('favorites.user_id', '=', $user_id)
         ->get();
      

        return view ('likelist',['posts' => $all,'likes' => $like,] );
        
    }

}

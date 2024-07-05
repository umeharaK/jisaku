<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use Illuminate\Support\Facades\DB;


use App\Post;
use APP\Like;
use APP\Follow;
use APP\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;


class MailSendController extends Controller
{
    public function send(){

        return view ('auth/verify', );
    }

	public function sends(Post $post){

    	$data = [];

    	Mail::send('emails.test', $data, function($message){
    	    $message->to('abc987@example.com', 'Test')
    	    ->subject('This is a test mail');
    	});

		$post = new Post;
        $all = $post->all()->toArray(); 

        return view ('mypage',['posts' => $all,] );
    }
}

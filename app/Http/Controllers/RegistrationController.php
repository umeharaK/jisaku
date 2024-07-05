<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Like;
use App\Follow;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateDate;


class RegistrationController extends Controller
{
    public function createPostForm(){
        
    }

    public function createPost(Request $request){

      $request->validate([
        'title'  => 'required',
        'image' => 'required|image',
    ]);

              // 拡張子つきでファイル名を取得
              $imageName = $request->file('image')->getClientOriginalName();

              // 拡張子のみ
              $extension = $request->file('image')->getClientOriginalExtension();
              $newImageName = pathinfo($imageName, PATHINFO_FILENAME) . "_" . uniqid() . "." . $extension;
              $request->file('image')->move(public_path() . "/img/tmp", $newImageName);
              $image = "/img/tmp/" . $newImageName;


        return view ('post_conf',[      
        'inputs' => $request->all(),      

        'image'        => $image,
        'newImageName' => $newImageName,]);
    }



    public function  postComp(Request $request){

   		if($request->has("back")){
            
            return view ('post_create',[ 'inputs' => $request->all(),]);
    		}
  
        $post = new Post;

        $columns=['title', 'image', 'profile', 'episode'];
        foreach($columns as $column){
                $post->$column = $request->$column;
        }
  
        Auth::user()->post()->save($post);

      return redirect('/');

    }

    public function  createPostComp(){

    }
    

    public function editPostForm(){
        
    }

    public function editPost(Post $post,Request $request){

      $request->validate([
        'title'  => 'required',
        'image' => 'required|image',
    ]);

              // 拡張子つきでファイル名を取得
              $imageName = $request->file('image')->getClientOriginalName();

              // 拡張子のみ
              $extension = $request->file('image')->getClientOriginalExtension();
              $newImageName = pathinfo($imageName, PATHINFO_FILENAME) . "_" . uniqid() . "." . $extension;
              $request->file('image')->move(public_path() . "/img/tmp", $newImageName);
              $image = "/img/tmp/" . $newImageName;


        return view ('post_edit_conf',[      
        'inputs' => $request->all(),      

        'image'        => $image,
        'newImageName' => $newImageName,]);
    }
    
    
    public function  editComp(int $id, CreateDate $request){

      if($request->has("back")){
           
           return view ('post_edit',[ 'inputs' => $request->all(),]);
       }

       $instance =new Post;
       $post = $instance->find($id);
       $columns=['title', 'image', 'profile', 'episode'];
       foreach($columns as $column){
               $post->$column = $request->$column;
       }

       $post->save();

     return redirect('/');

   }

   public function  editPostComp(){

   }

   public function deletePost(int $id){
    $instance =new Post;
    $post = $instance->find($id);
        

    $post->delete();

    return redirect('/');
}

}


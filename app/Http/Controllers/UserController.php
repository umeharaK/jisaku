<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Validation\Rule;
use App\Post;
use App\Like;
use App\Follow;
use App\Comment;



class UserController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();

        return view('user_edit', compact('authUser'));
    }

    public function userConfirm(){
        
    }

    public function confirm(Request $request) {
 
        return view('user_edit_conf',['input' => $request->all(),]);
    }

    public function comp() {
        $user = Auth::user();
     

        return view('user_edit_conf');
    }


    public function update($id, UserRequest $request) {
        $user = Auth::user();
        $form = $request->all();

        $profileImage = $request->file('profile_image');
        if ($profileImage != null) {
            $form['profile_image'] = $this->saveProfileImage($profileImage, $id); // return file name
        }

        unset($form['_token']);
        unset($form['_method']);
        $user->fill($form)->save();
        return redirect('/home');
    }

    private function saveProfileImage($image, $id) {
        // get instance
        $img = \Image::make($image);
        // resize
        $img->fit(100, 100, function($constraint){
            $constraint->upsize(); 
        });
        // save
        $file_name = 'profile_'.$id.'.'.$image->getClientOriginalExtension();
        $save_path = 'public/profiles/'.$file_name;
        Storage::put($save_path, (string) $img->encode());
        // return file name
        return $file_name;
    }


    
}
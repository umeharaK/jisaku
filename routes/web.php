<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RepliesController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\MailSendController;

use App\Comment;
use App\Follows;
use App\Like;
use App\Post;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', [DisplayController::class,'index'])->name('index');

Route::get('/mypage', [DisplayController::class,'mypage'])->name('mypage');
Route::get('/likelist', [DisplayController::class,'likelist'])->name('likelist');

// Route::get('/password/reset',[MailSendController::class,'send'] )->name('send_mail');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request'); 
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset'); // view は auth.passwords.reset
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm'); // view は auth.passwords.confirm
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice'); // view は auth.verify
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/sendmail',[UserResetPassword::class,'toMail'] );


Route::group(['middleware' => 'auth'], function () {

Route::get('/post_create', function () {return view('post_create');})->name('post_create');

Route::get('/post_conf', [RegistrationController::class,'createPostForm'])->name('post_conf');
Route::post('/post_conf',[RegistrationController::class,'createPost']);

Route::get('/post_comp', [RegistrationController::class,'createPostComp'])->name('post_comp');
Route::post('/post_comp',[RegistrationController::class,'postComp']);


// Route::get('/user_edit', [RegistrationController::class,'createProfileForm'])->name('user_edit');
// Route::post('/user_edit',[RegistrationController::class,'createProfile']);

// Route::get('/user_comp', [RegistrationController::class,'createProfileComp'])->name('user_comp');
// Route::post('/user_comp',[RegistrationController::class,'profileComp']);

Route::get('/post/like/{id}', 'RepliesController@like')->name('post.like');
Route::get('/post/unlike/{id}', 'RepliesController@unlike')->name('post.unlike');

Route::get('/post/follow/{id}', 'FollowController@follow')->name('post.follow');
Route::get('/post/disfollow/{id}', 'FollowController@disfollow')->name('post.disfollow');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/follow/{userId}', [ FollowController::class, 'store']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/follow/{userId}', [ FollowController::class, 'store']);
    //追加
    Route::post('/follow/{userId}/destroy', [ FollowController::class, 'destroy']);
});


//プロフィール編集画面表示
Route::get('/profile', 'UserController@index')->name('profile');
Route::get('/user_conf', 'UserController@userConfirm')->name('user_edit_conf');
Route::post('/user_conf', 'UserController@confirm');
Route::post('/user_conf', 'UserController@comp')->name('user_edit_comp');
Route::post('/update', 'UserController@update')->name('user.update');


Route::get('/post/{post}/detail',[DisplayController::class,'postDetail'])->name('post.detail');
Route::get('/post/{post}/edit',[DisplayController::class,'postEdit'])->name('post.edit');


Route::get('/post/{id}/edit_conf', [RegistrationController::class,'editPostForm'])->name('edit_conf');
Route::post('/post/{id}/edit_conf',[RegistrationController::class,'editPost']);

Route::get('/post/{id}/edit_comp', [RegistrationController::class,'editPostComp'])->name('edit_comp');
Route::post('/post/{id}/edit_comp',[RegistrationController::class,'editComp']);

Route::get('/post_form/{id}',[RegistrationController::class,'deletePost'])->name('delete.post');

Route::get('/siginup', function () {return view('siginup');});	

Route::get('/logout', 'Auth\LoginController@logout');




});




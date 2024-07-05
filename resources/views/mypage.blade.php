<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
@extends('header')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

 <!-- Bootstrap CSSの読み込み -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

<div class="container my-5" id="contact">


      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="my-navbar-control">
        @if(Auth::check())
        <span class="my-navbar-item">{{ Auth::user()->name }}</sapn>
            /
        <a href="{{ route('logout') }}" id="logout" class="mt-navbar-item">ログアウト</a>
  
     @else
         <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
        /
        <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
     @endif 
  
  
         

            <!-- <a href="{{ route('profile') }}" class="col-2">
            <button type="submit" class="btn btn-success" >プロフィール編集</button>   
            </a> -->
 
          </div>
   </nav>
 </div>




<div class="container my-5" id="contact">
<div class="form-group row justify-content-around">

            <a href="{{ route('post_create') }}" class="btn btn-success col-2">
            <button type="submit" class="btn btn-success ">新規投稿</button>
            </a>

      <a class="btn btn-success col-2" href="{{ route('index') }}">
        <button class="btn btn-success" type="submit">投稿一覧</button> 
     </a>
     <!-- <a class="btn btn-success col-2" href="{{ route('post_create') }}">
        <button class="btn btn-success" type="submit">フォロー</button> 
     </a>
     <a class="btn btn-success col-2" href="{{ route('post_create') }}">
        <button class="btn btn-success" type="submit">フォロワー</button> 
     </a> -->
     <a class="btn btn-success col-2" href="{{ route('likelist') }}">
        <button class="btn btn-success" type="submit">お気に入り一覧</button> 
     </a>
    </div>




    <div id="app">
   <!-- カード -->
   <div class="container my-5" id="skill">
      <h2 class= "py-4 text-dark">マイページ</h2>
      <div class="row row-cols-1 row-cols-md-4"> 
         @foreach($posts as $post)
       
        <div class="col mb-4">
          <div class="card"> 
            <a href="{{ route('post.detail',['post' => $post['id']]) }}">    
              <img src=" {{$post['image']}}" class="card-img-top px-3 mb-3" alt="...">
            </a>
            <div class="card-body">
            <a href="{{ route('post.detail',['post' => $post['id']]) }}">
              <h5 class="card-title">{{$post['title']}}</h5></a>
              <p class="card-text">{{$post['episode']}}</p>
            </div>       
          </div>
        </div>     

        @endforeach  
  </div>
    </div>

    <div style="margin: 10px;">
 
            <table id="container" class="table table-sm table-bordered" style="width: 500px;"></table>
 
            <nav><ul class="pagination" id="pagination"></ul></nav>
        </div>

    <!-- jQuery,Popper.js,Bootstrap JSの順番で読み込む-->
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Popper.jsの読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrapのjsの読み込み -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

     
</body>
</html>
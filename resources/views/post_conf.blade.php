<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<div class="container my-5 text-center w-50" id="contact">
      <h2 class="py-4 text-dark">以下の内容で投稿しますか？</h2>
      <form  action="{{ route('post_comp')}}" method="post">
      @csrf
          <div class="form-group text-left row">
            
            <p class="col-2">記事タイトル</p>
            <input type="hidden" class="form-control col-10" id="formGroupExampleInput" name='title' value="{{ $inputs['title'] }}">
            <p class="col-10">{{ $inputs['title'] }}</p>
 
          </div>

          <div class="form-group text-left row">
            <p class="col-2">タグ登録</p>
            <input type="hidden" class="form-control col-10" id="formGroupExampleInput" name='profile' value="{{ $inputs['profile'] }}">
            <p class="col-10">{{ $inputs['profile'] }}</p>
          </div>

          <div class="form-group text-left row">
            <p class="col-2">写真
            </p>
            <input type="hidden" class="form-control col-10" id="formGroupExampleInput" name='image' value="{{ $image }}">
          <img src="{{ $image }}" alt=""  width=50%>
          </div>
          


          <div class="form-group text-left row">
            <p class="col-2">記事内容</p>
            <input type="hidden" class="form-control col-10" id="formGroupExampleInput" name='episode' value="{{ $inputs['episode'] }}">
            <p class="col-10">{{ $inputs['episode'] }}</p>
          </div>

            <button  class="btn btn-success" name="back">編集画面に戻る</button>
    
             <button type="submit" class="btn btn-success">投稿する</button>
        
      </form>
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
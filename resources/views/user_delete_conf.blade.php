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
      <h2 class="py-4 text-dark">アカウントを削除してもよろしいですか？</h2>

      <button type="submit" class="btn btn-success">削除する</button>
      <button type="submit" class="btn btn-success">編集画面に戻る</button>

      <form class="">
          <div class="form-group text-left row">
            <p class="col-2">ユーザー名</p>
            <input type="text" class="form-control col-10" id="formGroupExampleInput">
          </div>

          <div class="form-group text-left row">
            <p class="col-2">メールアドレス</p>
            <input type="text" class="form-control col-10" id="formGroupExampleInput">
          </div>

          <div class="form-group text-left row">
            <p class="col-2">パスワード</p>
            <input type="text" class="form-control col-10" id="formGroupExampleInput">
          </div>

          <div class="form-group text-left row">
            <p class="col-2">パスワード確認</p>
            <input type="text" class="form-control col-10" id="formGroupExampleInput">
          </div>

          <div class="form-group text-left row">
            <p class="col-2">アイコン画像</p>
            <img src="img/card.jpg" class="card-img-top px-3 mb-3" alt="...">
          </div>

          <div class="form-group text-left row">
            <p class="col-2">ヘッダー画像</p>
            <img src="img/card.jpg" class="card-img-top px-3 mb-3" alt="...">
          </div>


          <div class="form-group text-left row">
            <p class="col-2">プロフィール</p>
            <textarea class="form-control col-10" id="exampleFormControlTextarea1" rows="15"></textarea>
          </div>
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
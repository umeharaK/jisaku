

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
      <h2 class="py-4 text-dark">アカウント情報編集</h2>



      <form action="{{ route('user_edit_conf') }}" method="post"  enctype="multipart/form-data">
      @csrf
          <div class="form-group text-left">
            <label for="text">ユーザー名</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $authUser->name }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group text-left">
            <label for="exampleInputEmail1">メールアドレス</label>
            <input type="email" class="form-control" id="exampleInputEmail1"  name="email" value="{{ $authUser->email }}"  aria-describedby="emailHelp">
          </div>

          <div class="form-group text-left">
            <label for="exampleInputPassword1">パスワード</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group text-left">
            <label for="exampleInputPassword1">パスワード再入力</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="form-group text-left">


            <label for="profile_image">プロフィール画像</label>

          <label for="profile_image" class="btn">
           <input id="profile_image" type="file"  name="profile_image" onchange="previewImage(this);">
          </label>  


          <div class="form-group text-left">
            <label for="exampleInputPassword1">プロフィール</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment" value="{{ $authUser->comment }}"></textarea>
          </div>
          </div>

          <button type="submit" class="btn btn-success">編集内容確認</button>
          <button type="submit" class="btn btn btn-danger">アカウントを削除する</button>
        
      </form>
    
      <a href="{{ route('index') }}">
                  <button class='btn btn-secondary'>戻る</button>
      </a>
 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Popper.jsの読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrapのjsの読み込み -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</body>
</html>
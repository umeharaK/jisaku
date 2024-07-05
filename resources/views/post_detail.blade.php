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

      
  @if($params->is_liked_by_auth_user())
    <a href="{{ route('post.unlike', ['id' => $params->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $params->likes->count() }}</span></a>
  @else
    <a href="{{ route('post.like', ['id' => $params->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $params->likes->count() }}</span></a>
  @endif


  @if($params->is_followed_by_auth_user())
    <a href="{{ route('post.disfollow', ['id' => $params->user_id]) }}" class="btn btn-success btn-sm">フォロー解除<span class="badge"></span></a>
  @else
    <a href="{{ route('post.follow', ['id' => $params->user_id]) }}" class="btn btn-secondary btn-sm">フォロー<span class="badge"></span></a>
  @endif


<div>
  <button onclick="follow({{ $params->id }})">フォローする</button>
</div>

                              
  <a href="{{ route('post.edit',['post' => $params->id])  }}">

    <button class='btn btn-secondary'>投稿編集</button>
  </a>
  <div>

</div>
<div class="form-group text-left row">
      <div class="form-group text-left row col-8">
         <img src="{{$params->image}}" alt="" width=500px>
      </div>

<div class="col-16">
      <div class="form-group text-left row ">
            <p class="col-2">{{$params->user_id}}</p>
      </div>


      <div class="form-group text-left row">
            <h5 class="col-8">{{$params->title}}</h5>
            <p class="col-8">{{$params->updated_at}}</p>
      </div>

          <div class="form-group text-left row">
            <p class="col-8">{{$params->profile}}</p>
          </div>



          <div class="form-group text-left row">
            <p class="col-12">{{$params->episode}}</p>
  
          </div>
      </div>
      </div>

      </form>
      <a href="{{ route('index') }}">
                  <button class='btn btn-secondary'>戻る</button>
      </a>

    </div>
    <!-- Bootstrapのjsの読み込み -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
  function follow(userId) {
    $.ajax({
      // これがないと419エラーが出ます
      headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
      url: `/follow/${userId}`,
      type: "POST",
    })
      .done((data) => {
        console.log(data);
      })
      .fail((data) => {
        console.log(data);
      });
  }
</script>


</body>
</html>
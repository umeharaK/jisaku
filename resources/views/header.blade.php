<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '家計簿') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSSの読み込み -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<body>

<div class="container my-5" id="contact">
      <h2 class="py-4 text-dark">ロゴ</h2>

      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="my-navbar-control">
        @if(Auth::check())
        <span class="my-navbar-item">{{ Auth::user()->name }}</sapn>
            /
        <a href="{{ route('logout') }}" id="logout" class="mt-navbar-item">ログアウト</a>
        <!-- <from id="logout-from" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </from> -->
        <!-- <script>
            document.getElementById('logout').addEventListener('click', function(event){
             event.preventDefault();
            document.getElementById('logout-from').submit();
            });
        </script> -->
     @else
         <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
        /
        <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
     @endif 
    </div>
   </nav>
 </div>
 
 <div class="container my-5" id="contact">
 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
 <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(!Auth::check() && (!isset($authgroup) || !Auth::guard($authgroup)->check()))
                            <li class="nav-item">
                                @isset($authgroup)
                                <a class="nav-link" href="{{ url("login/$authgroup") }}">{{ __('Login') }}</a>
                                @else
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endisset
                            </li>
                            @isset($authgroup)
                            @if (Route::has("$authgroup-register"))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("$authgroup-register") }}">{{ __('ログアウト') }}</a>
                                </li>
                            @endif
                            @else
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('ログアウト') }}</a>
                                </li>
                            @endif
                            @endisset
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @isset($authgroup)
                                    {{ Auth::guard($authgroup)->user()->name }} <span class="caret"></span>
                                    @else
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    @endisset
                                </a>
                                @endif 
        </ul>
        </nav>
        </div>


 <!-- jQuery,Popper.js,Bootstrap JSの順番で読み込む-->
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Popper.jsの読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrapのjsの読み込み -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    @yield('content')
</body>
</html>
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', '家計簿')); ?></title>

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
        <?php if(Auth::check()): ?>
        <span class="my-navbar-item"><?php echo e(Auth::user()->name); ?></sapn>
            /
        <a href="<?php echo e(route('logout')); ?>" id="logout" class="mt-navbar-item">ログアウト</a>
        <!-- <from id="logout-from" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </from> -->
        <!-- <script>
            document.getElementById('logout').addEventListener('click', function(event){
             event.preventDefault();
            document.getElementById('logout-from').submit();
            });
        </script> -->
     <?php else: ?>
         <a class="my-navbar-item" href="<?php echo e(route('login')); ?>">ログイン</a>
        /
        <a class="my-navbar-item" href="<?php echo e(route('register')); ?>">会員登録</a>
     <?php endif; ?> 
    </div>
   </nav>
 </div>
 
 <div class="container my-5" id="contact">
 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
 <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(!Auth::check() && (!isset($authgroup) || !Auth::guard($authgroup)->check())): ?>
                            <li class="nav-item">
                                <?php if(isset($authgroup)): ?>
                                <a class="nav-link" href="<?php echo e(url("login/$authgroup")); ?>"><?php echo e(__('Login')); ?></a>
                                <?php else: ?>
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                <?php endif; ?>
                            </li>
                            <?php if(isset($authgroup)): ?>
                            <?php if(Route::has("$authgroup-register")): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route("$authgroup-register")); ?>"><?php echo e(__('ログアウト')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php else: ?>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('ログアウト')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php if(isset($authgroup)): ?>
                                    <?php echo e(Auth::guard($authgroup)->user()->name); ?> <span class="caret"></span>
                                    <?php else: ?>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    <?php endif; ?>
                                </a>
                                <?php endif; ?> 
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
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\MAMP\htdocs\RodentGarden\resources\views/header.blade.php ENDPATH**/ ?>
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSSの読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
  
<div class="container my-5 text-center w-50" id="contact">
      <h2 class="py-4 text-dark">ログイン</h2>
      <div class="card-header"><?php echo e(isset($authgroup) ? ucwords($authgroup) : ""); ?> <?php echo e(__('Login')); ?></div>

<div class="card-body">
    <?php if(isset($authgroup)): ?>
    <form method="POST" action="<?php echo e(url("login/$authgroup")); ?>"">
    <?php else: ?>
    <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php endif; ?>
        <?php echo csrf_field(); ?>
              <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" />
              </div>
              <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
        <div class="text-center">
  
                  <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                  パスワードの変更はこちらから
                  </a>
       
        </div>
        <a class="btn btn-link" href="<?php echo e(route('index')); ?>">
                  <button class='btn btn-secondary'>戻る</button>
      </a>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Popper.jsの読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrapのjsの読み込み -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

 
</body>
</html><?php /**PATH C:\MAMP\htdocs\RodentGarden\resources\views/auth/login.blade.php ENDPATH**/ ?>
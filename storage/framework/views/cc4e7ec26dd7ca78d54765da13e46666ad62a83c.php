<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="card mt-5">
        <div class="card-header"><?php echo e(isset($authgroup) ? ucwords($authgroup) : ""); ?> <?php echo e(__('Register')); ?></div>
          <div class="card-body">
                    <?php if(isset($authgroup)): ?>
                    <form method="POST" action="<?php echo e(url("register/$authgroup")); ?>">
                    <?php else: ?>
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php endif; ?>
                        <?php echo csrf_field(); ?>
              <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" />
              </div>
              <div class="form-group">
                <label for="name">ユーザー名</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" />
              </div>
              <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="form-group">
                <label for="password-confirm">パスワード（確認）</label>
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\RodentGarden\resources\views/auth/register.blade.php ENDPATH**/ ?>
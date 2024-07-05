<!DOCTYPE html>


<html>

<main>
    <h2>パスワード再設定</h2>
    <p>ご利用中のメールアドレスを入力してください</p>
    <p>パスワード再設定のためのURLをお送りします</p>
    <form method="POST" action="<?php echo e(route('send_mail')); ?>">
        <?php echo csrf_field(); ?>
        <div>
            <label>メールアドレス</label>
            <input type="text" name="mail" value="<?php echo e(old('mail')); ?>">
            <span><?php echo e($errors->first('mail')); ?></span>            <button type="submit">再設定メールを送信</button>
        </div>
        <div>
          <a href="<?php echo e(route('login')); ?>">戻る</a>
        </div> 
    </form>
</main>
</html><?php /**PATH C:\MAMP\htdocs\RodentGarden\resources\views/password_reset_mail.blade.php ENDPATH**/ ?>
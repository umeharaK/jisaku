<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', '家計簿')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    家計簿
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <main class="py-4">
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class='text-center'>収入</div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <table class='table'>
                                    <thead>
                                        <tr>
                                        <th> 詳細</th>
                                            <th scope='col'>日付</th>
                                            <th scope='col'>金額</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- ここに収入を表示する -->
                                        <?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr>
                                            <th scope='col'>
                                                <a href="<?php echo e(route('income.detail',['id' => $income['id']])); ?>">#</a>
                                            </th>
                                            <th scope='col'><?php echo e($income['date']); ?></th>
                                            <th scope='col'><?php echo e($income['amount']); ?></th>
                                         </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class='text-center'>支出</div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <table class='table'>
                                <thead>
                                    <tr>
                                        <th> 詳細</th>
                                        <th scope='col'>日付</th>
                                        <th scope='col'>金額</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- ここに支出を表示する -->    
                                    <?php $__currentLoopData = $spends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr>
                                            <th scope='col'>
                                                <a href="<?php echo e(route('spend.detail',['id' => $spend['id']])); ?>">#</a>
                                            </th>
                                            <th scope='col'><?php echo e($spend['date']); ?></th>
                                            <th scope='col'><?php echo e($spend['amount']); ?></th>
                                         </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html><?php /**PATH C:\MAMP\htdocs\RodentGarden\resources\views/home.blade.php ENDPATH**/ ?>
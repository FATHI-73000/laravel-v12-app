<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title', 'Mon Application'); ?></title>
</head>
<body>
    <header>
        <h1><?php echo $__env->yieldContent('header', 'Bienvenue sur notre site'); ?></h1>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html>
<?php /**PATH /home/user/my-laravel-app/resources/views/layout.blade.php ENDPATH**/ ?>
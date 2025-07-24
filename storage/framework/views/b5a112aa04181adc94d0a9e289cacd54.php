<!DOCTYPE html>
<html>
<head>
    <title>Stock</title>
</head>
<body>
    <h1>product</h1>

    <?php if($stock > 10): ?>
        <p style="color: green;">En stock (plus de 10 disponibles)</p>
    <?php elseif($stock > 0): ?>
        <p style="color: orange;">Stock limité (<?php echo e($stock); ?> restants)</p>
    <?php else: ?>
        <p style="color: red;">Rupture de stock</p>
    <?php endif; ?>

</body>
</html>
<?php /**PATH /home/user/my-laravel-app/resources/views/product.blade.php ENDPATH**/ ?>
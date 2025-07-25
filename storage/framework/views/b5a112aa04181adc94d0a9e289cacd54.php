<?php $__env->startSection('title', 'Stock des produits'); ?>
<?php $__env->startSection('header', 'Liste des produits'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <h2><?php echo e($produit['nom']); ?></h2>

        <?php if($produit['stock'] > 10): ?>
            <p style="color: green;">En stock (plus de 10 disponibles)</p>
        <?php elseif($produit['stock'] > 0): ?>
            <p style="color: orange;">Stock limité (<?php echo e($produit['stock']); ?> restants)</p>
        <?php else: ?>
            <p style="color: red;">Rupture de stock</p>
        <?php endif; ?>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/user/my-laravel-app/resources/views/product.blade.php ENDPATH**/ ?>
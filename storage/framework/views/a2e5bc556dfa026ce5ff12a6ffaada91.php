<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <?php echo $__env->yieldContent('heading'); ?>
</div>

<?php echo $__env->yieldContent('main-frame'); ?>

<!-- Button trigger modal -->

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\instagram\resources\views/main.blade.php ENDPATH**/ ?>
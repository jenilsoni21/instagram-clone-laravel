<div class="form-group mt-3">
    
    <input type="<?php echo e($type); ?>" class="form-control py-2" placeholder="<?php echo e($placeholder); ?>" name="<?php echo e($name); ?>"/>
    <span class="text-danger">
        <?php $__errorArgs = ['<?php echo e($name); ?>'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </span>
</div><?php /**PATH C:\xampp\htdocs\instagram\resources\views\components\input-fields.blade.php ENDPATH**/ ?>
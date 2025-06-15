<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<title>Instagram</title>


<div>
    <h1 class="text-white text-center">Recycle Bin</h1>
</div>
<div class="container">
    <div class="table-responsive">
        <table class="table table-primary text-white">
            <thead>
                <tr>
                    <th scope="col">Mobile</th>
                    <th scope="col">Name</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <pre>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-white">
                        <td><?php echo e($user->mobile_number); ?></td>
                        <td><?php echo e($user->fullname); ?></td>
                        <td><?php echo e($user->username); ?></td>
                        <td><?php echo e($user->password); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(route('destroyUser', ['id' => $user->id])); ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="<?php echo e(route('restoreUser', ['id' => $user->id])); ?>" class="btn btn-primary">Restore</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>


<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\instagram\resources\views\trash.blade.php ENDPATH**/ ?>
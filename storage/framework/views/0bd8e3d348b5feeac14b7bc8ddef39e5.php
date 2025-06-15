<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="row">
        <form action="<?php echo e(url('/upload')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3 mt-3">
                <label for="" class="form-label">Choose file</label>
                <input type="file" class="form-control" name="file" id="" placeholder=""
                    aria-describedby="fileHelpId" />
                <div id="fileHelpId" class="form-text">Help text</div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\instagram\resources\views\welcome.blade.php ENDPATH**/ ?>
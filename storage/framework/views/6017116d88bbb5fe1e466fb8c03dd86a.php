
<title>Login • Instagram</title>

<?php $__env->startSection('main-frame'); ?>
    <div class="container">
        <div class="row">
            <div class="min-vh-100 d-flex justify-content-center align-items-center">
                <div class="col-md-4 col-sm-10 border m-2 p-5 border-light rounded">
                    <div class="text-center">
                        <img src="<?php echo e(asset('images/instagram.png')); ?>" class="img-fluid login-icon" alt="Instagram Logo">
                    </div>
                    
                    <form action="<?php echo e(url('/')); ?>/login" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if (isset($component)) { $__componentOriginal02e30723e120d99dbc8249e977e5fe4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02e30723e120d99dbc8249e977e5fe4a = $attributes; } ?>
<?php $component = App\View\Components\InputFields::resolve(['type' => 'text','name' => 'username','placeholder' => 'Username, Email or Phone Number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('inputFields'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InputFields::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Username']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02e30723e120d99dbc8249e977e5fe4a)): ?>
<?php $attributes = $__attributesOriginal02e30723e120d99dbc8249e977e5fe4a; ?>
<?php unset($__attributesOriginal02e30723e120d99dbc8249e977e5fe4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02e30723e120d99dbc8249e977e5fe4a)): ?>
<?php $component = $__componentOriginal02e30723e120d99dbc8249e977e5fe4a; ?>
<?php unset($__componentOriginal02e30723e120d99dbc8249e977e5fe4a); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal02e30723e120d99dbc8249e977e5fe4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02e30723e120d99dbc8249e977e5fe4a = $attributes; } ?>
<?php $component = App\View\Components\InputFields::resolve(['type' => 'password','name' => 'password','placeholder' => 'Password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('inputFields'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InputFields::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02e30723e120d99dbc8249e977e5fe4a)): ?>
<?php $attributes = $__attributesOriginal02e30723e120d99dbc8249e977e5fe4a; ?>
<?php unset($__attributesOriginal02e30723e120d99dbc8249e977e5fe4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02e30723e120d99dbc8249e977e5fe4a)): ?>
<?php $component = $__componentOriginal02e30723e120d99dbc8249e977e5fe4a; ?>
<?php unset($__componentOriginal02e30723e120d99dbc8249e977e5fe4a); ?>
<?php endif; ?>

                        <div class="forgot text-end mt-1">
                            <a href="" class="text-decoration-none fw-bolder mx-2">
                                Forgot Password ?</a>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-3 rounded fw-bolder">Log in</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center my-3">
                        <hr class="border border-white divider mx-2">
                        <div class="text-center text-white">OR</div>
                        <hr class="border border-white divider mx-2">
                    </div>
                    <div class="facebook text-white text-center">
                        <a href="" class="text-decoration-none fw-bolder mx-2">Login With Facebook</a>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-white ">Don't have account ?</p>
                        <a href="<?php echo e(route('signup')); ?>" class="text-decoration-none fw-bolder mx-2">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\instagram\resources\views\login.blade.php ENDPATH**/ ?>

<title>Sign up • Instagram</title>

<?php $__env->startSection('main-frame'); ?>
    <div class="container">
        <div class="row">
            <div class="min-vh-100 d-flex justify-content-center align-items-center">
                <div class="signup-form col-md-4 col-sm-12">
                    <div class="signup-logo text-center">
                        <img src="<?php echo e(asset('images/instagram_word.png')); ?>" class="img-fluid login-icon" alt="Instagram Logo">
                    </div>
                    <span class="signup-subhead text-center text-light">
                        <?php echo e($title); ?>

                    </span>
                    <div class="facebook text-white text-center">
                        <a href="" class="text-decoration-none fw-bolder  mx-2">Sign up With Facebook</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <hr class="border border-white divider">
                        <div class="text-center text-white">OR</div>
                        <hr class="border border-white divider">
                    </div>
                    <form action="<?php echo e($url); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if (isset($component)) { $__componentOriginal02e30723e120d99dbc8249e977e5fe4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02e30723e120d99dbc8249e977e5fe4a = $attributes; } ?>
<?php $component = App\View\Components\InputFields::resolve(['type' => 'text','name' => 'mobilenumber','placeholder' => 'Mobile Number or Email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('inputFields'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InputFields::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Mobilenumber']); ?>
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
<?php $component = App\View\Components\InputFields::resolve(['type' => 'text','name' => 'fullname','placeholder' => 'Full Name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('inputFields'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InputFields::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Fullname']); ?>
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
<?php $component = App\View\Components\InputFields::resolve(['type' => 'text','name' => 'username','placeholder' => 'Username'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                        <div class="forgot text-center text-light mt-3">
                            <p>People who use our service may have uploaded your contact information to Instagram. <a
                                    href="" class="text-decoration-none fw-bolder">Learn More</a></p>
                            <p>By signing up, you agree to our Terms , <a href=""
                                    class="text-decoration-none fw-bolder">Privacy Policy and Cookies Policy</a> .</p>
                            
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary fw-bolder mt-3 rounded">Sign up</button>
                        </div>
                    </form>
                    <hr class="border border-white">
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-white">Already have an account ?</p>
                        <a href="<?php echo e(route('login')); ?>" class="text-decoration-none fw-bolder mx-2">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\instagram\resources\views/signup.blade.php ENDPATH**/ ?>
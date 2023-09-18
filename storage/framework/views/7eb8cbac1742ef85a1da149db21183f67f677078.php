<?php $__env->startSection('hero'); ?>
    <?php echo $__env->make('partials.learning.hero_cart', ['title' => __('Finalizar mi pedido')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <?php $cart = app('App\Services\Cart'); ?>
    <div class="container">
        <?php echo $__env->make('partials.learning.cart_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if($cart->hasProducts()): ?>
            <div class="row">
                <div class="col-12 mt-2 mb-2">
                    <form method="POST" action="<?php echo e(route('process_checkout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="site-btn float-right">
                            <?php echo e(__("Pagar")); ?>

                        </button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.learning", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/learning/checkout/index.blade.php ENDPATH**/ ?>
<form
    class="intro-newslatter"
    action="<?php echo e(route('apply_coupon')); ?>"
    method="POST"
>
    <?php echo csrf_field(); ?>
    <input
        type="text"
        name="coupon"
        placeholder="<?php echo e(__("¿Tienes un cupón de descuento?")); ?>"
        value="<?php echo e(session("coupon")); ?>"
    />
    <button type="submit" class="site-btn">
        <?php echo e(__("Canjear")); ?>

    </button>
</form>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/coupon_form.blade.php ENDPATH**/ ?>
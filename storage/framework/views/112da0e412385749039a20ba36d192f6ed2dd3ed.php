<?php $__env->startSection('hero'); ?>
    <?php echo $__env->make('partials.learning.courses.hero_single_course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid p-5">
        <div class="row">
            <?php echo $__env->make('partials.learning.courses.learn.visor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.learning.courses.learn.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.learning', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/learning/courses/learn.blade.php ENDPATH**/ ?>
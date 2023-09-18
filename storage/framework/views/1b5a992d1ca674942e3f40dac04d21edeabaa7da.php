<div class="row p-5">
    <div class="col-xs-12 col-xl-9 col-md-8 col-sm-8 col-lg-9">
        <p><?php echo $course->description; ?></p>

        <?php echo $__env->make("partials.learning.courses.curriculum.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-xs-12 col-xl-3 col-md-4 col-sm-4 col-lg-3">
        <?php echo $__env->make("partials.learning.courses.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/learning/courses/single.blade.php ENDPATH**/ ?>
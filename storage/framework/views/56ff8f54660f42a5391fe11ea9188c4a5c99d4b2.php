<!-- Hero single course section -->
<section class="hero-section-single-course set-single-bg">
    <div class="container">
        <div class="hero-text-single-course text-white">
            <img alt="<?php echo e($course->title); ?>" src="<?php echo e($course->imagePath()); ?>" class="img-fluid" />
            <h2><?php echo e($course->title); ?></h2>
            <?php echo $__env->make('partials.learning.courses.rating', ['rating' => $course->rating], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</section>
<!-- Hero single course section end -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/hero_single_course.blade.php ENDPATH**/ ?>
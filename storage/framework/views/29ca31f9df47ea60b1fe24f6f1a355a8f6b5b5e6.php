<div class="col-12 pt-0 mt-4">
    <h2 class="text-muted"><?php echo e(__("Valoraciones")); ?></h2>
    <hr />
</div>

<?php $__empty_1 = true; $__currentLoopData = $course->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <?php echo e($review->author->name); ?> (<?php echo e($review->created_at->format('d/m/Y')); ?>)
            </div>
            <div class="card-body pl-3">
                <?php echo $__env->make('partials.learning.courses.rating', ['rating' => $review->stars, 'hideCounter' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <hr />
                <div class="price"><small><?php echo e($review->review); ?></small></div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="alert alert-dark">
        <i class="fa fa-info-circle"></i>
        <?php echo e(__("Este curso todavía no tiene valoraciones")); ?>

    </div>
<?php endif; ?>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/reviews_list.blade.php ENDPATH**/ ?>
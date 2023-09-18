<!-- curriculum -->
<div class="card" id="course-curriculum">
    <?php $__empty_1 = true; $__currentLoopData = $course->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php echo $__env->make("partials.learning.courses.curriculum." . strtolower($unit->unit_type), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="empty-results">
            <?php echo e(__("El contenido de este curso todavía no está definido")); ?>

        </div>
    <?php endif; ?>
</div>
<!-- end curriculum -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/curriculum/index.blade.php ENDPATH**/ ?>
<!-- course sidebar -->
<div class="card" id="course-sidebar">
    <div class="card-header bg-dark text-white text-center">
        <?php echo e(__("Información del curso")); ?>

    </div>
    <div class="card-body">
        <div class="card-text">
            <?php echo __("Fecha de publicación: <span class='badge badge-dark float-right'>:created_at</span>", ["created_at" => $course->created_at->format("d/m/Y")]); ?>

        </div>
        <div class="card-text">
            <?php echo __("Unidades de archivos: <span class='badge badge-dark float-right'>:units</span>", ["units" => $course->totalFileUnits()]); ?>

        </div>
        <div class="card-text">
            <?php echo __("Unidades de vídeo: <span class='badge badge-dark float-right'>:units</span>", ["units" => $course->totalVideoUnits()]); ?>

        </div>
        <div class="card-text">
            <?php echo __("Duración total: <span class='badge badge-dark float-right'>:time</span>", ["time" => $course->totalTime()]); ?>

        </div>
    </div>
    <div class="card-footer">
        <?php echo $__env->make("partials.learning.courses.purchase_button", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/sidebar.blade.php ENDPATH**/ ?>
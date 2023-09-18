<div class="card-text">
    <p class="pl-2 pt-1 pb-0 mb-0">
        <?php echo e($unit->title); ?>

        <span class="float-right mr-2">
            <i class="fa-1x fa fa-file-video-o"></i>
        </span>
        <span class="badge badge-dark float-right mr-1 mt-2">
            <?php echo e(__(":duration minutos", ["duration" => $unit->unit_time])); ?>

        </span>
        <?php if($unit->free): ?>
            <span class="badge badge-success float-right mr-1 mt-2">
                <?php echo e(__("Gratis")); ?>

            </span>
        <?php endif; ?>
    </p>
</div>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/curriculum/video.blade.php ENDPATH**/ ?>
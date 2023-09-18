<div>
    <ul class="list-inline">
        <li class="list-inline-item">
            <i class="fa-2x fa fa-star<?php echo e($rating >= 1 ? ' yellow' : ''); ?>"></i>
        </li>
        <li class="list-inline-item">
            <i class="fa-2x fa fa-star<?php echo e($rating >= 2 ? ' yellow' : ''); ?>"></i>
        </li>
        <li class="list-inline-item">
            <i class="fa-2x fa fa-star<?php echo e($rating >= 3 ? ' yellow' : ''); ?>"></i>
        </li>
        <li class="list-inline-item">
            <i class="fa-2x fa fa-star<?php echo e($rating >= 4 ? ' yellow' : ''); ?>"></i>
        </li>
        <li class="list-inline-item">
            <i class="fa-2x fa fa-star<?php echo e($rating >= 5 ? ' yellow' : ''); ?>"></i>
        </li>

        <!-- hide counter on reviews loop -->
        <?php if(!isset($hideCounter)): ?>
            <li class="list-inline-item">
                <h3>(<?php echo e($course->reviews->count()); ?>)</h3>
            </li>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/rating.blade.php ENDPATH**/ ?>
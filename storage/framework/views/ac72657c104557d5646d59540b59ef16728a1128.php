<?php if(auth()->guard()->guest()): ?>
    <a
        href="<?php echo e(route("welcome")); ?>"
        class="btn btn-info btn-lg btn-block"
    >
        <?php echo e(__("Crear una cuenta")); ?>

    </a>
<?php else: ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check("purchaseCourse", $course)): ?>
        <a
            href="<?php echo e(route("add_course_to_cart", ["course" => $course])); ?>"
            class="site-btn btn-block"
        >
            <?php echo e(__("Tomar el curso por :price", ["price" => $course->formatted_price])); ?>

        </a>
    <?php else: ?>
        <a
            href="<?php echo e(route("courses.learn", ["course" => $course])); ?>"
            class="site-btn btn-block"
        >
            <?php echo e(__("Ir al curso")); ?>

        </a>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/purchase_button.blade.php ENDPATH**/ ?>
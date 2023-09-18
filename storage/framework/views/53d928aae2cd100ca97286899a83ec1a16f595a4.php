<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-3 mt-0">
            <h2><?php echo e(__("Tus cursos")); ?></h2>
            <a href="<?php echo e(route('teacher.courses.create')); ?>" class="site-btn">
                <?php echo e(__("Crear curso")); ?>

            </a>
        </div>
    </div>
    <div class="course-warp">
        <div class="row course-items-area">
            <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <!-- course -->
                <div class="mix col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="<?php echo e($course->imagePath()); ?>">
                            <div class="price">Precio: <?php echo e($course->price); ?>€</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5><?php echo e($course->title); ?></h5>
                                <div class="students"><?php echo e(__(":count Estudiantes", ['count' => $course->students_count])); ?></div>
                            </div>
                            <div class="course-author">
                                <a href="<?php echo e(route("teacher.courses.update", ["course" => $course])); ?>">
                                    <?php echo e(__("Gestionar curso")); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course end -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="container">
                    <div class="empty-results">
                        <?php echo __("No tienes ningún curso todavía: :link", ["link" => "<a href='".route('teacher.courses.create')."'>Crear mi primer curso</a>"]); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="row">
            <?php if(count($courses)): ?>
                <?php echo e($courses->links()); ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<!-- course section end -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/teacher/courses/list.blade.php ENDPATH**/ ?>
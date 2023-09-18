<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-3">
            <h2><?php echo e(__("Listado de cursos")); ?></h2>
            <p><?php echo e(__("Aquí tienes todos los cursos de la plataforma")); ?></p>
        </div>
    </div>
    <div class="course-warp">
        <div class="row course-items-area">
            <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="<?php echo e($course->imagePath()); ?>">
                            <div class="price">Price: <?php echo e($course->price); ?>€</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5><?php echo e($course->title); ?></h5>
                                <div class="students"><?php echo e(__(":count Estudiantes", ['count' => $course->students_count])); ?></div>
                            </div>
                            <div class="course-author">
                                <div class="ca-pic set-bg" data-setbg="/img/authors/1.jpg"></div>
                                <p><?php echo e($course->teacher->name); ?></p>
                            </div>

                            <div class="course-author">
                                <a class="site-btn btn-block" href="<?php echo e(route('courses.show', ['course' => $course])); ?>"><?php echo e(__("Ver el curso")); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <div class="empty-results">
                        <?php echo __("No hay ningún curso para mostrar"); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="row justify-content-center mt-2">
            <?php if(count($courses)): ?>
                <?php echo e($courses->links()); ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<!-- course section end -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/learning/courses/list.blade.php ENDPATH**/ ?>
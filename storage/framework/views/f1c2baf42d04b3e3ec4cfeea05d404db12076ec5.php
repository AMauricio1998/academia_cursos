<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-0">
            <h2><?php echo e(__("Cursos destacados")); ?></h2>
            <p><?php echo e(__("Aquí tienes los cursos destacados de la plataforma")); ?></p>
        </div>
    </div>
    <div class="course-warp">
        <ul class="course-filter controls">
            <li class="control active" data-filter="all"><?php echo e(__("Todos")); ?></li>
            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="control" data-filter=".<?php echo e($category->name); ?>">
                    <?php echo e($category->name); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="empty-results">
                    <?php echo __("No hay categorías disponibles"); ?>

                </div>
            <?php endif; ?>
        </ul>
        <div class="row course-items-area">
        <?php $__empty_1 = true; $__currentLoopData = $featuredCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 <?php $__currentLoopData = $course->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($category->name); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="<?php echo e($course->imagePath()); ?>">
                            <div class="price"><?php echo e(__("Precio :price €", ["price" => $course->price])); ?></div>
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
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="empty-results">
                    <?php echo __("No hay cursos destacados disponibles"); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- course section end -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/featured_courses.blade.php ENDPATH**/ ?>
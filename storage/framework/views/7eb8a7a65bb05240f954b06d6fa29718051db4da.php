<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="/css/jConfirm.css" />
<?php $__env->stopPush(); ?>
<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-3 mt-0">
            <h2><?php echo e(__("Tus unidades")); ?></h2>
            <a href="<?php echo e(route('teacher.units.create')); ?>" class="site-btn">
                <?php echo e(__("Crear unidad")); ?>

            </a>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th><?php echo e(__("Título")); ?></th>
                        <th><?php echo e(__("Curso")); ?></th>
                        <th><?php echo e(__("Tipo")); ?></th>
                        <th><?php echo e(__("Duración")); ?></th>
                        <th><?php echo e(__("Alta")); ?></th>
                        <th><?php echo e(__("Edición")); ?></th>
                        <th><?php echo e(__("Acciones")); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="text-center">
                            <td><?php echo e($unit->title); ?></td>
                            <td><?php echo e($unit->course->title); ?></td>
                            <td><?php echo e($unit->unit_type); ?></td>
                            <td><?php echo e($unit->unit_time ?? "N/A"); ?></td>
                            <td><?php echo e($unit->created_at->format("d/m/Y H:i")); ?></td>
                            <td><?php echo e($unit->updated_at->format("d/m/Y")); ?></td>
                            <td>
                                <a
                                    class="btn btn-outline-dark"
                                    href="<?php echo e(route("teacher.units.edit", ["unit" => $unit])); ?>"
                                >
                                    <i class="fa fa-pencil-square"></i> <?php echo e(__("Editar")); ?>

                                </a>
                                <a
                                    class="btn btn-outline-danger delete-record"
                                    data-route="<?php echo e(route("teacher.units.destroy", ["unit" => $unit])); ?>"
                                    href="#"
                                >
                                    <i class="fa fa-trash-o"></i> <?php echo e(__("Eliminar")); ?>

                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr class="text-center">
                            <td colspan="7">
                                <div class="empty-results">
                                    <?php echo __("No tienes ninguna unidad todavía: :link", ["link" => "<a href='".route('teacher.units.create')."'>Crear mi primera unidad</a>"]); ?>

                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <div class="row">
                <?php if(count($units)): ?>
                    <?php echo e($units->links()); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- course section end -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/teacher/units/list.blade.php ENDPATH**/ ?>
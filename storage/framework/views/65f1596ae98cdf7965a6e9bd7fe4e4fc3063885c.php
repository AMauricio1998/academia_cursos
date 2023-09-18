<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset("css/jConfirm.css")); ?>" />
<?php $__env->stopPush(); ?>

<!-- coupon section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-3 mt-0">
            <h2><?php echo e(__("Tus cupones de descuento")); ?></h2>
            <a href="<?php echo e(route('teacher.coupons.create')); ?>" class="site-btn">
                <?php echo e(__("Crear cupón")); ?>

            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th><?php echo e(__("Código")); ?></th>
                            <th><?php echo e(__("Habilitado")); ?></th>
                            <th><?php echo e(__("Tipo")); ?></th>
                            <th><?php echo e(__("Descuento")); ?></th>
                            <th><?php echo e(__("Alta")); ?></th>
                            <th><?php echo e(__("Expiración")); ?></th>
                            <th><?php echo e(__("Acciones")); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="text-center">
                                <td><?php echo e($coupon->code); ?></td>
                                <td><?php echo e($coupon->enabled ? __("Sí") : __("No")); ?></td>
                                <td><?php echo e($coupon->discount_type); ?></td>
                                <td><?php echo e($coupon->discount); ?></td>
                                <td><?php echo e($coupon->created_at->format("d/m/Y")); ?></td>
                                <td><?php echo e($coupon->expires_at ? $coupon->expires_at->format("d/m/Y") : "N/A"); ?></td>
                                <td>
                                    <a class="btn btn-outline-dark" href="<?php echo e(route("teacher.coupons.edit", ["coupon" => $coupon])); ?>">
                                        <i class="fa fa-pencil-square"></i> <?php echo e(__("Editar")); ?>

                                    </a>
                                    <a
                                        class="btn btn-outline-danger delete-record"
                                        data-route="<?php echo e(route("teacher.coupons.destroy", ["coupon" => $coupon])); ?>"
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
                                        <?php echo __("No tienes ningún cupón todavía: :link", ["link" => "<a href='".route('teacher.coupons.create')."'>Crear mi primer cupón</a>"]); ?>

                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <?php if(count($coupons)): ?>
                <?php echo e($coupons->links()); ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<!-- coupon section end -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/teacher/coupons/list.blade.php ENDPATH**/ ?>
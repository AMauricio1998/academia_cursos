<!-- orders section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-4 mt-0 pt-0">
            <h2><?php echo e(__("Tus pedidos")); ?></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table">
                    <?php echo $__env->make("partials.student.orders.order_thead", ["detail" => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php echo $__env->make("partials.student.orders.order_row", ["detail" => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr class="text-center">
                                <td colspan="7">
                                    <div class="empty-results">
                                        <?php echo __("No tienes ningún pedido todavía"); ?>

                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <?php if(count($orders)): ?>
                <?php echo e($orders->links()); ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<!-- orders end section -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/student/orders/list.blade.php ENDPATH**/ ?>
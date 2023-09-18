<?php $__env->startSection("content"); ?>
    <!-- order detail section -->
    <section class="course-section spad">
        <div class="container">
            <div class="section-title mb-4 mt-0 pt-0">
                <h2><?php echo e(__("Detalle del pedido #:id#", ["id" => $order->id])); ?></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <?php echo $__env->make("partials.student.orders.order_thead", ["detail" => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <tbody>
                            <?php echo $__env->make("partials.student.orders.order_row", ["detail" => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th><?php echo e(__("Curso")); ?></th>
                                <th><?php echo e(__("Precio")); ?></th>
                                <th><?php echo e(__("Acciones")); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $order->order_lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td><?php echo e($line->course->title); ?></td>
                                <td><?php echo e($line->formatted_price); ?></td>
                                <td>
                                    <a href="<?php echo e(route('courses.show', ['course' => $line->course])); ?>"><?php echo e(__("Ir al curso")); ?></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row justify-content-center">
                <a href="<?php echo e(route("student.orders.download_invoice", ["order" => $order])); ?>" class="site-btn">
                    <?php echo e(__("Descargar factura")); ?>

                </a>
            </div>
        </div>
    </section>
    <!-- order detail end section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.student", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/student/orders/show.blade.php ENDPATH**/ ?>
<div class="row">
    <div class="table-responsive pt-5 mt-5">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th><?php echo e(__("Curso")); ?></th>
                <th><?php echo e(__("Precio")); ?></th>
                <th><?php echo e(__("Acciones")); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $cart->getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($course->title); ?></td>
                    <td><?php echo e($course->formatted_price); ?></td>
                    <td>
                        <a
                            href="<?php echo e(route("remove_course_from_cart", ["course" => $course])); ?>"
                            class="btn btn-outline-danger"
                        >
                            <?php echo e(__("Eliminar")); ?>

                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="3">
                        <div class="empty-results">
                            <?php echo __("No tienes ningún curso en el carrito"); ?>

                        </div>
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
            <tfoot class="bg-dark brand-text font-weight-bold">
                <tr>
                    <td colspan="2">
                        <?php echo $__env->make("partials.learning.courses.coupon_form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                    <td>
                        <div class="pt-2" style="font-size: 25px">
                            <?php echo e(__("Total :total", ["total" => $cart->totalAmount()])); ?>

                        </div>
                    </td>
                </tr>
                <?php if(session()->has("coupon")): ?>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>
                            <div class="pt-2" style="font-size: 25px">
                                <?php echo e(__("Con descuento :total", ["total" => $cart->totalAmountWithDiscount()])); ?>

                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tfoot>
        </table>
    </div>
</div>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/cart_content.blade.php ENDPATH**/ ?>
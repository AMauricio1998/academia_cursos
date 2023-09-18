<tr class="text-center">
    <td><?php echo e($order->id); ?></td>
    <td><?php echo e($order->formatted_total_amount); ?></td>
    <td><?php echo e($order->coupon_code); ?></td>
    <td><?php echo e($order->created_at->format("d/m/Y")); ?></td>
    <td><?php echo e($order->formatted_status); ?></td>
    <td><?php echo e($order->order_lines_count); ?></td>
    <?php if(!$detail): ?>
        <td>
            <a class="btn btn-outline-dark" href="<?php echo e(route('student.orders.show', ['order' => $order])); ?>">
                <i class="fa fa-eye"></i> <?php echo e(__("Ver detalle")); ?>

            </a>
        </td>
    <?php endif; ?>
</tr>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/student/orders/order_row.blade.php ENDPATH**/ ?>
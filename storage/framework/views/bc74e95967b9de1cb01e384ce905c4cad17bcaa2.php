<!-- coupons form section -->
<section class="courses-section spad">
    <div class="section-title mb-3">
        <h2><?php echo e($title); ?></h2>
        <a href="<?php echo e(route('teacher.coupons')); ?>" class="site-btn">
            <?php echo e(__("Volver al listado de cupones")); ?>

        </a>
    </div>

    <div class="container">
        <?php echo $__env->make('partials.form_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo Form::model($coupon, $options); ?>

            <?php if(isset($update)): ?>
                <?php echo method_field("PUT"); ?>
            <?php endif; ?>

            <div class="form-group">
                <?php echo Form::label('code', __("Código")); ?>

                <?php echo Form::text('code', null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('courses[]', __("Selecciona los cursos")); ?>

                <?php echo Form::select('courses[]', \App\Models\Course::forTeacher()->pluck("title", "id"), null, ["class" => "form-control", "multiple" => true]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('discount_type', __("Escoge el tipo de descuento")); ?>

                <?php echo Form::select('discount_type', [\App\Models\Coupon::discountTypes()], null, ["class" => "form-control"]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('discount', __("Escoge un descuento para tus cursos")); ?>

                <?php echo Form::text('discount', null, ["class" => "form-control"]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('enabled', __("¿Está habilitado?")); ?>

                <?php echo Form::select('enabled', [
                        0 => __("No"),
                        1 => __("Sí"),
                    ], null, ["class" => "form-control"]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('description', __("Añade una descripción al cupón")); ?>

                <?php echo Form::textarea('description', null, ["class" => "form-control", "rows" => 3]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('expires_at', __("¿Expira?")); ?>

                <?php echo Form::date('expires_at', $coupon->expires_at, ["class" => "form-control"]); ?>

            </div>

            <?php echo Form::submit($textButton, ['class' => 'site-btn mt-2 float-right']);; ?>


        <?php echo Form::close(); ?>

    </div>
</section>
<!-- coupons form end section -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/teacher/coupons/form.blade.php ENDPATH**/ ?>
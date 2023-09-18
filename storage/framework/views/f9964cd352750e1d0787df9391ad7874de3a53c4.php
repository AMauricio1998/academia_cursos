<?php $__env->startPush('css'); ?>
    <link
        href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
        rel="stylesheet"
    />
<?php $__env->stopPush(); ?>

<!-- units section -->
<section class="units-section spad">
    <div class="section-title mb-3">
        <h2><?php echo e($title); ?></h2>
        <a href="<?php echo e(route('teacher.units')); ?>" class="site-btn">
            <?php echo e(__("Volver al listado de unidades")); ?>

        </a>
    </div>

    <div class="container">
        <?php echo $__env->make("partials.form_errors", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e(Form::model($unit, $options)); ?>

            <?php if(isset($update)): ?>
                <?php echo method_field("PUT"); ?>
            <?php endif; ?>

            <div class="form-group">
                <?php echo Form::label('title', __("Título")); ?>

                <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('course_id', __("Selecciona el curso")); ?>

                <?php echo Form::select('course_id', $courses->pluck("title", "id"), null, ["class" => "form-control"]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('free', __("¿Unidad gratuita?")); ?>

                <?php echo Form::select('free', [
                        0 => __("No"),
                        1 => __("Sí"),
                    ], null, ["class" => "form-control"]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('unit_type', __("Tipo de unidad")); ?>

                <?php echo Form::select('unit_type', [
                        \App\Models\Unit::VIDEO => __("Vídeo"),
                        \App\Models\Unit::ZIP => __("Archivo comprimido"),
                        \App\Models\Unit::SECTION => __("Sección")
                    ], null, ["class" => "form-control"]); ?>

            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <?php echo Form::number('unit_time', null, ['class' => 'form-control', 'placeholder' => __("Duración de la unidad si es vídeo")]); ?>

                </div>
            </div>

            <div class="form-group">
                <?php echo Form::label('content', __("Añade el contenido, por ejemplo, el iframe de Vimeo")); ?>

                <?php echo Form::textarea('content', old('content') ?? $unit->content, ['id' => 'summernote']); ?>

            </div>

            <div class="custom-file">
                <?php echo Form::file('file', ['class' => 'custom-file-input', 'id' => 'file']); ?>

                <?php echo Form::label('file', __("Escoge un archivo"), ['class' => 'custom-file-label']); ?>

            </div>

            <?php echo Form::submit($textButton, ['class' => 'site-btn mt-2 float-right']);; ?>


        <?php echo e(Form::close()); ?>

    </div>
</section>
<!-- units end section -->

<?php $__env->startPush('js'); ?>
    <script
        src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"
    ></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/teacher/units/form.blade.php ENDPATH**/ ?>
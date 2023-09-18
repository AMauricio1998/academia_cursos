<?php $__env->startPush('css'); ?>
    <link
        href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
        rel="stylesheet"
    />

    <style>
        .drag-list {
            width: 100%;
            margin: 0 auto;
        }

        .drag-list > li {
            list-style: none;
            background: rgb(255, 255, 255);
            border: 1px solid rgb(196, 196, 196);
            margin: 5px 0;
            font-size: 14px;
        }

        .drag-list .title {
            display: inline-block;
            width: 90%;
            padding: 6px 6px 6px 12px;
            vertical-align: top;
        }

        .drag-list .drag-area {
            display: inline-block;
            background: rgb(158, 211, 179);
            width: 8%;
            height: 34px;
            vertical-align: center;
            float: right;
            cursor: move;
            text-align: center;
            padding-top: 5px;
        }
        .drag-list .VIDEO {
            background: #b21f2d;
        }
        .drag-list .SECTION {
            background: #9e9e9e;
        }
        .drag-list .ZIP {
            background: #1d1d1d;
        }
    </style>
<?php $__env->stopPush(); ?>

<section class="courses-section spad">
    <div class="section-title mb-3">
        <h2><?php echo e($title); ?></h2>
        <a href="<?php echo e(route('teacher.courses')); ?>" class="site-btn">
            <?php echo e(__("Volver al listado de cursos")); ?>

        </a>
    </div>
    <div class="container">
        <?php echo $__env->make('partials.form_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if($course->picture): ?>
            <div class="row">
                <div class="col-3 offset-9">
                    <img alt="<?php echo e($title); ?>" class="img-fluid" width="250" src="<?php echo e($course->imagePath()); ?>" />
                </div>
            </div>
        <?php endif; ?>

        <?php echo Form::model($course, $options); ?>

            <?php if(isset($update)): ?>
                <?php echo method_field("PUT"); ?>
            <?php endif; ?>

            <input type="hidden" name="orderedUnits" />

            <div class="form-group">
                <?php echo Form::label('title', __("Título")); ?>

                <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('price', __("Escoge un precio para tu curso")); ?>

                <?php echo Form::select('price', \App\Models\Course::prices, null, ["class" => "form-control"]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('categories[]', __("Selecciona las categorías")); ?>

                <?php echo Form::select('categories[]', \App\Models\Category::pluck("name", "id"), null, ["class" => "form-control", "multiple" => true]); ?>

            </div>

            <div class="form-group">
                <h2 class="text-muted text-center mb-2">
                    <?php echo e(__("Organiza las unidades de tu curso")); ?>

                </h2>
                <ul class="drag-list">
                    <?php $__empty_1 = true; $__currentLoopData = $course->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li data-id="<?php echo e($unit->id); ?>">
                            <span class="title">
                                <?php echo e($unit->title); ?>

                                <?php if($unit->free): ?>
                                    <span class="badge badge-success float-right">
                                        <?php echo e(__("Gratis")); ?>

                                    </span>
                                <?php endif; ?>
                            </span>
                            <span class="drag-area <?php echo e($unit->unit_type); ?>">
                                <?php switch($unit->unit_type):
                                    case (\App\Models\Unit::VIDEO): ?>
                                        <i class="fa fa-file-video-o text-white"></i>
                                    <?php break; ?>
                                    <?php case (\App\Models\Unit::SECTION): ?>
                                        <i class="fa fa-list-alt text-white"></i>
                                    <?php break; ?>
                                    <?php case (\App\Models\Unit::ZIP): ?>
                                        <i class="fa fa-file-zip-o text-white"></i>
                                    <?php break; ?>
                                <?php endswitch; ?>
                            </span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="empty-results">
                            <?php echo __("No tienes ninguna unidad todavía: :link", ["link" => "<a href='".route('teacher.units.create')."'>Añade nuevas unidades para tu curso</a>"]); ?>

                        </div>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="form-group">
                <?php echo Form::label('description', __("Añade el contenido del curso")); ?>

                <?php echo Form::textarea('description', old('description') ?? $course->description, ['id' => 'summernote']); ?>

            </div>

            <div class="custom-file">
                <?php echo Form::file('picture', ['class' => 'custom-file-input', 'id' => 'picture']); ?>

                <?php echo Form::label('picture', __("Selecciona la imagen de tu curso"), ['class' => 'custom-file-label']); ?>

            </div>

            <?php echo Form::submit($textButton, ['class' => 'site-btn mt-2 float-right']);; ?>

        <?php echo Form::close(); ?>


    </div>
</section>

<?php $__env->startPush("js"); ?>
    <script src="/js/drag-arrange.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            $('#summernote').summernote({
                height: 300,
            });

            $('li').arrangeable({dragSelector: '.drag-area'});
            $('.drag-list').on('drag.end.arrangeable', function () {
                let orderedUnits = [];
                const listItems = $(".drag-list li");
                let order = 1;
                for (let li of listItems) {
                    const id = $(li).data("id");
                    orderedUnits.push({
                        id,
                        order
                    });
                    order++;
                }
                $("input[name=orderedUnits]").val(JSON.stringify(orderedUnits));
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/teacher/courses/form.blade.php ENDPATH**/ ?>
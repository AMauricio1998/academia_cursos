<div class="col-xs-12 col-xl-3 col-md-4 col-sm-4 col-lg-3">
    <div class="card">
        <div class="card-header bg-brand text-white text-center">
            <?php echo e(__("Duración total: :time", ["time" => $course->totalTime()])); ?>

        </div>
        <div class="card-body p-0">
            <?php $index = 1 ?>
            <?php $__empty_1 = true; $__currentLoopData = $course->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php switch($unit->unit_type):
                    case (\App\Models\Unit::SECTION): ?>
                        <div class="bg-dark text-white p-0 text-center">
                            <?php echo e($unit->title); ?>

                        </div>
                    <?php break; ?>
                    <?php case (\App\Models\Unit::ZIP): ?>
                        <div class="card-text p-2 border-bottom unit">
                            <a
                                id="unit-<?php echo e($index); ?>"
                                href="#"
                                class="text-black-50"
                                data-type="<?php echo e(\App\Models\Unit::ZIP); ?>"
                                data-unit="<?php echo e($unit); ?>"
                                data-index="<?php echo e($index); ?>"
                            >
                                <i class="fa fa-file-zip-o"></i> <?php echo e($unit->title); ?>

                            </a>
                        </div>
                    <?php break; ?>
                    <?php case (\App\Models\Unit::VIDEO): ?>
                        <div class="card-text p-2 border-bottom unit">
                            <a
                                id="unit-<?php echo e($index); ?>"
                                href="#"
                                class="text-black-50"
                                data-type="<?php echo e(\App\Models\Unit::VIDEO); ?>"
                                data-unit="<?php echo e($unit); ?>"
                                data-index="<?php echo e($index); ?>"
                            >
                                <i class="fa fa-file-video-o"></i> <?php echo e($unit->title); ?>

                            </a>
                        </div>
                    <?php break; ?>
                <?php endswitch; ?>
                <?php if($unit->unit_type !== \App\Models\Unit::SECTION): ?>
                    <?php $index++ ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="empty-results">
                    <?php echo __("No hay nada todavía"); ?>

                </div>
            <?php endif; ?>
        </div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('review', $course)): ?>
            <div class="card-footer">
                <a
                    href="<?php echo e(route('courses.reviews.create', ['course' => $course])); ?>"
                    class="site-btn btn-block"
                >
                    <?php echo e(__("Valorar el curso")); ?>

                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->startPush("js"); ?>
<script>
    let index = null;
    jQuery(document).ready(function () {
        jQuery(".unit").on("click", function (e) {
            e.preventDefault();
            const link = $(this).find("a");
            $(".unit").removeClass("unit-selected");
            $(this).addClass("unit-selected");
            index = link.data("index");
            const unit = link.data("unit");
            const type = link.data("type");
            const visorHeader = $("#visor-card .card-header");
            const visorBody = $("#visor-card .card-body");
            const visorFooter = $("#visor-card .card-footer");
            const downloadText = '<?php echo e(__("Descargar")); ?>';
            const prevUnitText = '<?php echo e(__("Anterior unidad")); ?>';
            const nextUnitText = '<?php echo e(__("Siguiente unidad")); ?>';
            visorHeader.text(unit.title);
            if (type === '<?php echo e(\App\Models\Unit::ZIP); ?>') {
                const url = `/storage/units/${unit.file}`;
                const html = `
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="90%">${unit.file}</td>
                                <td><a href="#" onclick="window.location.href = '${url}'">${downloadText}</a></td>
                            </tr>
                        </tbody>
                    </table>
                `;
                visorBody.html(html);
            }
            if (type === '<?php echo e(\App\Models\Unit::VIDEO); ?>') {
                const html = `
                    <div class="embed-responsive embed-responsive-16by9">
                        ${unit.content}
                    </div>
               `;
                visorBody.html(html);
            }

            let footerButtons = '';
            if ($(`#unit-${index+1}`).length) {
                footerButtons += `
                  <button class="site-btn float-right loadNextUnit">${nextUnitText}</button>
               `;
            }
            if ($(`#unit-${index-1}`).length) {
                footerButtons += `
                  <button class="site-btn float-left loadPrevUnit">${prevUnitText}</button>
               `;
            }
            visorFooter.html(footerButtons);
        });

        const visor = $("#visor-card");
        visor.on("click", ".loadNextUnit", function () {
            const nextIndex = index += 1;
            $(`#unit-${nextIndex}`).click();
        });
        visor.on("click", ".loadPrevUnit", function () {
            const prevIndex = index -= 1;
            $(`#unit-${prevIndex}`).click();
        });
    })
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/courses/learn/sidebar.blade.php ENDPATH**/ ?>
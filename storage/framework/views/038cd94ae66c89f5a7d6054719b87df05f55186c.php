<?php $__env->startSection('hero'); ?>
    <?php echo $__env->make('partials.learning.courses.hero_single_course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div id="review-card" class="col-xs-12 p-5">
            <div class="card">
                <div class="card-header text-center">
                    <?php echo e(__("Añade una valoración al curso")); ?>

                </div>
                <div class="card-body">
                    <?php echo $__env->make("partials.form_errors", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form
                        method="POST"
                        action="<?php echo e(route('courses.reviews.store', ['course' => $course])); ?>"
                        id="rating_form"
                    >
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="stars" value="1" />

                        <div class="row">
                            <div class="col-12 text-center">
                                <ul id="list_rating" class="list-inline" style="font-size: 40px;">
                                    <li class="list-inline-item star" data-number="1">
                                        <i class="fa fa-star yellow"></i>
                                    </li>
                                    <li class="list-inline-item star" data-number="2">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="list-inline-item star" data-number="3">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="list-inline-item star" data-number="4">
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="list-inline-item star" data-number="5">
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <textarea
                                    placeholder="<?php echo e(__("Escribe una reseña")); ?>"
                                    id="review"
                                    name="review"
                                    class="form-control"
                                    rows="4"
                                ></textarea>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12">
                                <button type="submit" class="site-btn btn-block text-white">
                                    <i class="fa fa-space-shuttle"></i> <?php echo e(__("Valorar curso")); ?>

                                </button>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <a href="<?php echo e(route("courses.learn", ["course" => $course])); ?>" class="btn btn-dark btn-lg p-2 btn-block text-white">
                                    <i class="fa fa-arrow-left"></i> <?php echo e(__("Volver al curso")); ?>

                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush("js"); ?>
<script>
    jQuery(document).ready(function() {
        const ratingSelector = jQuery('#list_rating');
        ratingSelector.find('li').on('click', function () {
            const number = $(this).data('number');
            $("#rating_form").find('input[name=stars]').val(number);
            ratingSelector.find('li i').removeClass('yellow').each(function(index) {
                if ((index + 1) <= number) {
                    $(this).addClass('yellow');
                }
            })
        })
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.learning', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/learning/courses/reviews/form.blade.php ENDPATH**/ ?>
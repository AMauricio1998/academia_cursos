<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="/img/bg.jpg">
    <div class="container">
        <div class="hero-text text-white">
            <h2><?php echo e(__("Los mejores cursos de programación Online")); ?></h2>
            <p>
                <?php echo __("En <span class='brand-text'>:app</span> podrás evolucionar rápido con la ayuda de los mayores expertos", [
                    'app' => env('APP_NAME')
                ]); ?>

            </p>
        </div>

        <?php echo $__env->make('partials.learning.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>
<!-- Hero section end -->
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/learning/hero_courses.blade.php ENDPATH**/ ?>
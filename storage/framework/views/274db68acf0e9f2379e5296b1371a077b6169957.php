<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link brand-text" href="<?php echo e(route("teacher.courses")); ?>"><?php echo e(__("Cursos")); ?></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link brand-text" href="<?php echo e(route("teacher.units")); ?>"><?php echo e(__("Unidades")); ?></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link brand-text" href="<?php echo e(route('teacher.coupons')); ?>"><?php echo e(__("Cupones")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link brand-text" href="#"><?php echo e(__("Alumnos")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link brand-text" href="#"><?php echo e(__("Valoraciones")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link brand-text" href="#"><?php echo e(__("Promociones")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link brand-text" href="#"><?php echo e(__("Ganancias")); ?></a>
            </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link" href="<?php echo e(route("welcome")); ?>"><?php echo e(__("Volver al frontal")); ?></a>
        </span>
    </div>
</nav>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/teacher/navigation.blade.php ENDPATH**/ ?>
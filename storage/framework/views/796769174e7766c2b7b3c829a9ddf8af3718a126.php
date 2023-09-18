<nav class="navbar navbar-expand-lg navbar-dark bg-brand">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo e(route("student.courses")); ?>"><?php echo e(__("Cursos")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo e(route("student.orders")); ?>"><?php echo e(__("Facturas")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo e(route("student.billing.credit_card_form")); ?>"><?php echo e(__("Datos de pago")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><?php echo e(__("Valoraciones")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><?php echo e(__("Certificados")); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><?php echo e(__("Lista de deseos")); ?></a>
            </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link" href="<?php echo e(route("welcome")); ?>"><?php echo e(__("Volver al frontal")); ?></a>
        </span>
    </div>
</nav>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/partials/student/navigation.blade.php ENDPATH**/ ?>
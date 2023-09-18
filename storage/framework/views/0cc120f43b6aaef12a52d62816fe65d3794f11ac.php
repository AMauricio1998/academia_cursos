<?php $__env->startSection("content"); ?>
    <div class="container py-5">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4"><?php echo e(__("Tus datos de pago")); ?></h1>
            </div>
        </div>
        <!-- End -->

        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="bg-white rounded-lg shadow-sm p-5">
                    <!-- Credit card form tabs -->
                    <ul role="tablist" class="nav bg-dark text-white nav-pills rounded-pill nav-fill mb-3">
                        <li class="nav-item">
                            <a data-toggle="pill" href="#nav-tab-card" class="nav-link rounded-pill">
                                <i class="fa fa-credit-card"></i>
                                <?php echo e(__("Información de tu tarjeta en :app", ["app" => env("APP_NAME")])); ?>

                            </a>
                        </li>
                    </ul>
                    <!-- End -->

                    <?php echo $__env->make('partials.form_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Credit card form content -->
                    <div class="tab-content">
                        <div id="nav-tab-card" class="tab-pane fade show active">
                            <form
                                role="form"
                                action="<?php echo e(route('student.billing.process_credit_card')); ?>"
                                method="POST"
                            >
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="card_number"><?php echo e(__("Número de la tarjeta")); ?></label>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            name="card_number"
                                            placeholder="<?php echo e(__("Número de la tarjeta")); ?>"
                                            class="form-control"
                                            required
                                            value="<?php echo e(old('card_number') ?
                                                old('card_number') :
                                                (auth()->user()->card_last_four ? '************' . auth()->user()->card_last_four : null)); ?>"
                                        />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-cc-visa mx-1"></i>
                                                <i class="fa fa-cc-mastercard mx-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label>
                                                <span class="hidden-xs"><?php echo e(__("Fecha expiración")); ?></span>
                                            </label>
                                            <div class="input-group">
                                                <input
                                                    type="number"
                                                    placeholder="<?php echo e(__("MM")); ?>"
                                                    name="card_exp_month"
                                                    class="form-control"
                                                    required
                                                />
                                                <input
                                                    type="number"
                                                    placeholder="<?php echo e(__("YY")); ?>"
                                                    name="card_exp_year"
                                                    class="form-control"
                                                    required
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4">
                                            <label ><?php echo e(__("CVC")); ?></label>
                                            <input type="text" name="cvc" required class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <button
                                    type="submit"
                                    class="site-btn btn-block rounded-pill shadow-sm"
                                >
                                    <?php echo e(__("Guardar tarjeta")); ?>

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.student", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/student/credit_card_form.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo e(env('APP_NAME')); ?></title>
        <meta charset="UTF-8">
        <meta name="description" content="WebUni Education Template">
        <meta name="keywords" content="webuni, education, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

        <!-- Favicon -->
        <link href="/img/favicon.ico" rel="shortcut icon"/>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/css/style.css"/>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php echo $__env->yieldPushContent('css'); ?>
    </head>
    <body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php echo $__env->make('partials.teacher.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.teacher.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startComponent('components.alert-component'); ?><?php if (isset($__componentOriginala3bd265eb1c5895f70e1366156f7b9fcc7936155)): ?>
<?php $component = $__componentOriginala3bd265eb1c5895f70e1366156f7b9fcc7936155; ?>
<?php unset($__componentOriginala3bd265eb1c5895f70e1366156f7b9fcc7936155); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('partials.learning.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--====== Javascripts & Jquery ======-->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>

    <script src="/js/jConfirm.js"></script>
    <script>
        jQuery(document).ready(function() {
            $.jConfirm.defaults.question = '<?php echo e(__("¿Estás seguro?")); ?>';
            $.jConfirm.defaults.confirm_text = '<?php echo e(__("Sí")); ?>';
            $.jConfirm.defaults.deny_text = '<?php echo e(__("No")); ?>';
            $.jConfirm.defaults.position = 'top';
            $.jConfirm.defaults.theme = 'black';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    <script src="/js/functions.js"></script>

    <?php echo $__env->yieldPushContent('js'); ?>
    </body>
</html>
<?php /**PATH /Users/israel/cursosdesarrolloweb/laravel/e-learning/ibero-learning/resources/views/layouts/teacher.blade.php ENDPATH**/ ?>
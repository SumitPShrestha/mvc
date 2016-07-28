<?php
?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/mvc/static/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/mvc/static/app.css" rel="stylesheet">
    <link href="/mvc/static/css/grid.css" rel="stylesheet">
    <base href="/"/>
    <title class="green">Online test app</title>
</head>
<body>
<div class="wrapper">


    <?php
    /*** error reporting on ***/
    error_reporting(E_ALL);


    /*** define the site path ***/
    $site_path = realpath(dirname(__FILE__));
    define('__SITE_PATH', $site_path);

    /*** include the init.php file ***/
    include /** @lang text */
    'includes/init.php';


    /*** load the router ***/
    $registry->router = new router($registry);

    /*** set the controller path ***/
    $registry->router->setPath(__SITE_PATH . '/controller');
    /*** load up the template ***/
    $registry->template = new template($registry);

    /*** load the controller ***/
    $registry->router->loader();


    ?>

</div>
<div class="fotter row">
    <div class="row">
        <div class="col-lg-9"></div>
        <div class="col-lg-3">
            <span class="powered-by"><i class="fa fa-gears"></i> Powered By: Sumit Prakash Shrestha</span>
        </div>
    </div>

</div>
<script src="/mvc/static/js/lib/jquery.min.js"></script>
<script src="/mvc/static/js/lib/jquery.bxslider.min.js"></script>
<script src="/mvc/static/js/lib/scrollspy.js"></script>
<script src="/mvc/static/js/app.js"></script>
<script src="/mvc/static/js/lib/Highly-Customizable-jQuery-Datepicker-Plugin-Datepicker/dist/datepicker.min.js">


</script>
</body>
</html>
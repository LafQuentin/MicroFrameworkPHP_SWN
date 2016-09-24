<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php new System\Desc(); ?>" />
    <meta name="keywords" content="<?php new System\Keywords(); ?>" />

    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link href="<?= System\Router::goodUrl(); ?>web/cv/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= System\Router::goodUrl(); ?>web/cv/css/animate.css" rel="stylesheet">
    <link href="<?= System\Router::goodUrl(); ?>web/cv/css/font-awesome.min.css" rel="stylesheet">
    <?php if($_SESSION['intro'] == true){ ?>
    <link href="<?= System\Router::goodUrl(); ?>web/cv/css/home.css" rel="stylesheet">
    <?php }else{ ?>
    <link href="<?= System\Router::goodUrl(); ?>web/cv/css/main.css" rel="stylesheet">
    <?php } ?>

    <title><?php new System\Title(); ?></title>
</head>
<body>

<?php
$dev = 0;
if($dev == 1){ ?>
<div class="warp-menu container">
    <div id="bc1" class="btn-group btn-breadcrumb">
        <?php
        $bc = new System\Breadcrumbs;
        $bc->crumbs();
        echo $bc->breadcrumbs;
        ?>
    </div>
<!--##############################################################################-->
    <div class="row" style="padding-top: 10px">
        <div class="col-md-6"><?= \System\Debug::dump($_GET); ?></div>
        <div class="col-md-6" style="padding-left:0px"><?= \System\Debug::dump($_POST); ?></div>
    </div>
    <div class="row">
        <div class="col-md-12"><?= \System\Debug::dump($_SESSION); ?></div>
    </div>
<!--##############################################################################-->
</div>
<?php } ?>

    <?= $data; ?>
<script src="<?= System\Router::goodUrl(); ?>web/cv/js/jquery-3.1.0.min.js"></script>
<script src="<?= System\Router::goodUrl(); ?>web/cv/js/bootstrap.min.js"></script>
<script src="<?= System\Router::goodUrl(); ?>web/cv/js/wow.min.js"></script>
<script src="<?= System\Router::goodUrl(); ?>web/cv/js/Chart.bundle.min.js"></script>
<?php if($_SESSION['intro'] == true){ ?>
<script src="<?= System\Router::goodUrl(); ?>web/cv/js/jquery.particleground.min.js"></script>
<script src="<?= System\Router::goodUrl(); ?>web/cv/js/home.js"></script>
<?php } ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_bCLnjNRhCnjw1ETNnnPAATwZ2EOtmSk"></script>
<script src="<?= System\Router::goodUrl(); ?>web/cv/js/main.js"></script>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46676342-4', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>
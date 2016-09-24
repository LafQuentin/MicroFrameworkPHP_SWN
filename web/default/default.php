<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php new System\Title(); ?></title>
    <meta name="description" content="<?php new System\Desc(); ?>" />
    <meta name="keywords" content="<?php new System\Keywords(); ?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= System\Router::goodUrl(); ?>web/default/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= System\Router::goodUrl(); ?>web/default/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= System\Router::goodUrl(); ?>web/default/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= System\Router::goodUrl(); ?>web/default/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= System\Router::goodUrl(); ?>web/default/icon/favicon-16x16.png">
    <link rel="manifest" href="<?= System\Router::goodUrl(); ?>web/default/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= System\Router::goodUrl(); ?>web/default/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">-->
    <link rel="stylesheet" href="<?= System\Router::goodUrl(); ?>web/default/css/morris.css">


    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>-->
    <script src="<?= System\Router::goodUrl(); ?>web/default/js/morris.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="<?= System\Router::goodUrl(); ?>web/default/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= System\Router::goodUrl(); ?>web/default/css/main.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
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

<?= $data; ?>

<script src="<?= System\Router::goodUrl(); ?>web/default/js/bootstrap.min.js"></script>
<script src="<?= System\Router::goodUrl(); ?>web/default/js/main.js"></script>
</body>
</html>
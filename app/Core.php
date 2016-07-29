<?php

require'SWN.System/system/Config.php';
require'SWN.System/debug/Debug.php';
require'SWN.System/system/CheckStr.php';
require'SWN.System/system/Restricted.php';
require'SWN.System/system/Token.php';
require'SWN.System/Router.php';
require'SWN.System/error/PageNotFound.php';
require'SWN.System/error/Notification.php';
require'SWN.System/system/View.php';
require'SWN.System/system/Title.php';
require'SWN.System/system/Breadcrumbs.php';
require'SWN.System/system/Desc.php';
require'SWN.System/system/Database.php';
require'SWN.System/system/Model.php';

use System\Router;
use System\Config;

$config = new Config();

ob_start();

$loadRouter = new Router();
$loadRouter->loadController();
$data = ob_get_clean();


require'../web/'.$config->template().'/'.$config->template().'.php';





?>
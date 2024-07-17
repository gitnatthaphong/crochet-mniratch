<?php

$_SERVER['CI_ENV'] = 'development'; //production, development

define('ENCRYPTION_KEY', '5a4fe08359c7f97380e408c717ef42c86939cd86');

define('APP_BASE_URL', getDomian());
define('APP_HOST', 'mysqldb');
define('APP_USERNAME', 'root');
define('APP_PASSWORD', '1234');
define('APP_DATABASE', 'handmade');


function getDomian()
{
    $domin_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . '/';
    $sub_dir = explode('/', $_SERVER['PHP_SELF']);
    $sub_dir = array_filter($sub_dir);


    $sub_dir = current($sub_dir);
    if (!empty($sub_dir) && $sub_dir != 'index.php') {
        $subName = $sub_dir . '/';
    } else {
        $subName = '/';
    }
    $domin_link = $domin_link . $subName;
    return $domin_link;
}

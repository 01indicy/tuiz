<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once ('../vendor/autoload.php');

    $Test = new \Indiciez\Tuiz\QueryBuilder();
    print_r($Test::rawQuery("SELECT * FROM tbl_employee LIMIT 3"));
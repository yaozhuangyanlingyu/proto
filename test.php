<?php
require_once __DIR__ . '/vendor/autoload.php';

use aplum_proto\Tservice;
use app\components\proto\order\SvoucherExpireTimeRequest;

function test1() {
    $obj = new Tservice();
    $time=$obj->getDate();
    echo $time . "\n";
}

function test2() {
    $obj = new SvoucherExpireTimeRequest();
    echo "<pre>";
    print_r($obj);
}

test1();

test2();

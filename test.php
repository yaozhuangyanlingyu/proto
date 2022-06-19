<?php
require_once __DIR__ . '/vendor/autoload.php';

use aplum_proto\Tservice;

$obj=new Tservice();

$time=$obj->getDate();
echo $time;



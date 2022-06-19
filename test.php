<?php
require_once __DIR__ . '/vendor/autoload.php';

use Aplum\Proto\Tservice;

$obj=new Tservice();

$time=$obj->getDate();
echo $time;



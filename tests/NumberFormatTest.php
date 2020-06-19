<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/19
 * Time: 15:29
 */

require __DIR__ . '/../vendor/autoload.php';

use \numberFormat\NumberFormat;

$number = 24213123;

echo NumberFormat::byte_format($number);
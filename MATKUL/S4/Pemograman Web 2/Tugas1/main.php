<?php
// no inheritance
require_once 'Product.php';
require_once 'Electronic.php';
require_once 'Television.php';

$product = new Product();
echo $product->merek;
echo "<br>";
echo $product->Info();
echo "<br>";
// with inheritance
$electronic = new Electronic("TV LG 123", "LG", 100);
echo $electronic->Info();
echo "<br>";
// with inheritence
$television = new Television("TV LG 123", "LG", 1000, "LCD");
echo $television->Info();
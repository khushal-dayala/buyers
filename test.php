<?php

require __DIR__ . '/vendor/autoload.php';

use MyVendor\MyPackage\MyPackage;

$package = new MyPackage();
echo $package->greet("World");

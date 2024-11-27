<?php

require __DIR__ . '/vendor/autoload.php';

use BuyersList\MyPackage\MyPackage;

$package = new MyPackage();
echo $package->greet("Friends, I am using this package for get buyers list");
<?php

require '../vendor/autoload.php';

use Marius\Kilo\Windows\WindowManufacturer;

$windowManufacturer = new WindowManufacturer();
$window = $windowManufacturer->manufactureWindow('plastic', 'red');

echo 'I am ' . $window->getDescription() . '.' . ' I was installed by ' . $window->getExpert()->getDescription() . '.' . PHP_EOL;
echo 'I am ' . $window->getDescription() . '.' . ' I am ' . $window->getColor()->getDescription() . '.' . PHP_EOL;
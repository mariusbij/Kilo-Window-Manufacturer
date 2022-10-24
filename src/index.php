<?php

require '../vendor/autoload.php';

use Marius\KiloWindowManufacturer\WindowManufacturer;

$windowManufacturer = new WindowManufacturer();
$window = $windowManufacturer->manufactureWindow('plastic', 'red');

echo 'This is a ' . $window->getDescription() . '.' . ' I was installed by ' . $window->getExpert()->getDescription() . '.' . PHP_EOL;
echo 'This is a ' . $window->getDescription() . '.' . ' I am ' . $window->getColor()->getDescription() . '.' . PHP_EOL;
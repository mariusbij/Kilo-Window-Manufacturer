<?php

require '../vendor/autoload.php';

use Marius\KiloWindowManufacturer\WindowManufacturer;

$windowManufacturer = new WindowManufacturer();
$window = $windowManufacturer->manufactureWindow('plastic', 'red');

echo $window->getDescription() . '. ' . $window->getExpertDescription() . PHP_EOL;
echo $window->getDescription() . '. ' . $window->getColorDescription() . PHP_EOL;

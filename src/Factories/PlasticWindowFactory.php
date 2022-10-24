<?php

namespace Marius\KiloWindowManufacturer\Factories;

use Marius\KiloWindowManufacturer\Windows\PlasticWindow;
use Marius\KiloWindowManufacturer\Windows\WindowInterface;
use Marius\KiloWindowManufacturer\Experts\PlasticWindowExpert;
use Marius\KiloWindowManufacturer\Experts\WindowExpertInterface;

class PlasticWindowFactory implements WindowFactoryInterface
{
    public function makeWindow(): WindowInterface
    {
        return new PlasticWindow();
    }

    public function makeWindowExpert(): WindowExpertInterface
    {
        return new PlasticWindowExpert();
    }
}

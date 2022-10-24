<?php

namespace Marius\KiloWindowManufacturer\Factories;

use Marius\KiloWindowManufacturer\Windows\AluminumWindow;
use Marius\KiloWindowManufacturer\Windows\WindowInterface;
use Marius\KiloWindowManufacturer\Experts\AluminumWindowExpert;
use Marius\KiloWindowManufacturer\Experts\WindowExpertInterface;

class AluminumWindowFactory implements WindowFactoryInterface
{
    public function makeWindow(): WindowInterface
    {
        return new AluminumWindow();
    }

    public function makeWindowExpert(): WindowExpertInterface
    {
        return new AluminumWindowExpert();
    }
}
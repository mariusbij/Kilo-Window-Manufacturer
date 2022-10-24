<?php

namespace Marius\KiloWindowManufacturer\Factories;

use Marius\KiloWindowManufacturer\Experts\WindowExpertInterface;
use Marius\KiloWindowManufacturer\Windows\WindowInterface;

interface WindowFactoryInterface
{
    public function makeWindow(): WindowInterface;
    public function makeWindowExpert(): WindowExpertInterface;
}
<?php

namespace Marius\Kilo\Factories;

use Marius\Kilo\Windows\AluminumWindow;
use Marius\Kilo\Windows\WindowInterface;
use Marius\Kilo\Experts\AluminumWindowExpert;
use Marius\Kilo\Experts\WindowExpertInterface;

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
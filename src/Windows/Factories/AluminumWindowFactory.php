<?php

namespace Marius\Kilo\Windows\Factories;

use Marius\Kilo\Windows\Windows\AluminumWindow;
use Marius\Kilo\Windows\Windows\WindowInterface;
use Marius\Kilo\Windows\Experts\AluminumWindowExpert;
use Marius\Kilo\Windows\Experts\WindowExpertInterface;

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
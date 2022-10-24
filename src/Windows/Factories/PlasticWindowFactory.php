<?php

namespace Marius\Kilo\Windows\Factories;

use Marius\Kilo\Windows\Windows\PlasticWindow;
use Marius\Kilo\Windows\Windows\WindowInterface;
use Marius\Kilo\Windows\Experts\PlasticWindowExpert;
use Marius\Kilo\Windows\Experts\WindowExpertInterface;

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
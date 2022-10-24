<?php

namespace Marius\Kilo\Factories;

use Marius\Kilo\Windows\PlasticWindow;
use Marius\Kilo\Windows\WindowInterface;
use Marius\Kilo\Experts\PlasticWindowExpert;
use Marius\Kilo\Experts\WindowExpertInterface;

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
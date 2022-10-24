<?php

namespace Marius\Kilo\Windows\Factories;

use Marius\Kilo\Windows\Experts\WindowExpertInterface;
use Marius\Kilo\Windows\Windows\WindowInterface;

interface WindowFactoryInterface
{
    public function makeWindow(): WindowInterface;
    public function makeWindowExpert(): WindowExpertInterface;
}
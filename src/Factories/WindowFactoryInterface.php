<?php

namespace Marius\Kilo\Factories;

use Marius\Kilo\Experts\WindowExpertInterface;
use Marius\Kilo\Windows\WindowInterface;

interface WindowFactoryInterface
{
    public function makeWindow(): WindowInterface;
    public function makeWindowExpert(): WindowExpertInterface;
}
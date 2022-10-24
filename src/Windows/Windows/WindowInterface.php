<?php

namespace Marius\Kilo\Windows\Windows;

use Marius\Kilo\Windows\Colors\ColorInterface;
use Marius\Kilo\Windows\Experts\WindowExpertInterface;

interface WindowInterface
{
    public function getDescription(): string;

    public function getColor(): ColorInterface;

    public function setColor(ColorInterface $color): void;

    public function getExpert(): WindowExpertInterface;

    public function setExpert(WindowExpertInterface $expert): void;
}
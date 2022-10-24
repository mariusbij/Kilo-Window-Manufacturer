<?php

namespace Marius\Kilo\Windows;

use Marius\Kilo\Colors\ColorInterface;
use Marius\Kilo\Experts\WindowExpertInterface;

interface WindowInterface
{
    public function getDescription(): string;

    public function getColor(): ColorInterface;

    public function setColor(ColorInterface $color): void;

    public function getExpert(): WindowExpertInterface;

    public function setExpert(WindowExpertInterface $expert): void;
}
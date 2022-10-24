<?php

namespace Marius\KiloWindowManufacturer\Windows;

use Marius\KiloWindowManufacturer\Colors\ColorInterface;
use Marius\KiloWindowManufacturer\Experts\WindowExpertInterface;

interface WindowInterface
{
    public function getDescription(): string;

    public function getColor(): ColorInterface;

    public function setColor(ColorInterface $color): void;

    public function getExpert(): WindowExpertInterface;

    public function setExpert(WindowExpertInterface $expert): void;
}
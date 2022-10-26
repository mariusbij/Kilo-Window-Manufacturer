<?php

namespace Marius\KiloWindowManufacturer\Windows;

use Marius\KiloWindowManufacturer\Colors\ColorInterface;
use Marius\KiloWindowManufacturer\Experts\WindowExpertInterface;

interface WindowInterface
{
    public function getDescription(): string;

    public function getColorDescription(): string;

    public function getExpertDescription(): string;

    public function setColor(ColorInterface $color): void;

    public function setExpert(WindowExpertInterface $expert): void;
}

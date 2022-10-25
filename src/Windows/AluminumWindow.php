<?php

namespace Marius\KiloWindowManufacturer\Windows;

use Marius\KiloWindowManufacturer\Colors\ColorInterface;
use Marius\KiloWindowManufacturer\Experts\WindowExpertInterface;

class AluminumWindow implements WindowInterface
{
    public const TYPE = 'aluminum';

    private string $description;

    private WindowExpertInterface $expert;

    private ColorInterface $color;

    public function __construct()
    {
        $this->description = sprintf('%s window', self::TYPE);
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getColor(): ColorInterface
    {
        return $this->color;
    }

    public function setColor(ColorInterface $color): void
    {
        $this->color = $color;
    }

    public function getExpert(): WindowExpertInterface
    {
        return $this->expert;
    }

    public function setExpert(WindowExpertInterface $expert): void
    {
        $this->expert = $expert;
    }
}

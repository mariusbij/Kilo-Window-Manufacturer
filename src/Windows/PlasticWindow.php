<?php

namespace Marius\KiloWindowManufacturer\Windows;

use Marius\KiloWindowManufacturer\Painters\Colors\ColorInterface;
use Marius\KiloWindowManufacturer\Experts\WindowExpertInterface;

class PlasticWindow implements WindowInterface
{
    public const TYPE = 'plastic';

    private string $description;

    private WindowExpertInterface $expert;

    private ColorInterface $color;

    public function __construct()
    {
        $this->description = sprintf('This is a %s window', self::TYPE);
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getExpertDescription(): string
    {
        return sprintf('I was installed by %s', $this->expert->getDescription());
    }

    public function getColorDescription(): string
    {
        return sprintf('I am %s', $this->color->getDescription());
    }

    public function setColor(ColorInterface $color): void
    {
        $this->color = $color;
    }

    public function setExpert(WindowExpertInterface $expert): void
    {
        $this->expert = $expert;
    }
}

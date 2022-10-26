<?php

namespace Marius\KiloWindowManufacturer\Windows;

use Marius\KiloWindowManufacturer\Experts\WindowExpertInterface;
use Marius\KiloWindowManufacturer\Colors\ColorInterface;

abstract class Window implements WindowInterface
{
    protected string $description;

    protected WindowExpertInterface $expert;

    protected ColorInterface $color;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $string): void
    {
        $this->description = sprintf('This is a %s window', $string);
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

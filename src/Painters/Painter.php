<?php

namespace Marius\KiloWindowManufacturer\Painters;

use Marius\KiloWindowManufacturer\Painters\Colors\ColorInterface;
use Marius\KiloWindowManufacturer\Painters\Colors\Blue;
use Marius\KiloWindowManufacturer\Painters\Colors\Brown;
use Marius\KiloWindowManufacturer\Painters\Colors\Red;
use Marius\KiloWindowManufacturer\Windows\WindowInterface;

class Painter
{
    /**
     * @throws \Exception
     */
    public function paintWindow(WindowInterface $window, string $windowColor): void
    {
        $color = $this->processColor($windowColor);
        $window->setColor($color);
    }

    /**
     * @throws \Exception
     */
    private function processColor(string $windowColor): ColorInterface
    {
        return match ($windowColor) {
            Blue::NAME => new Blue(),
            Brown::NAME => new Brown(),
            Red::NAME => new Red(),
            default => throw new \Exception('Color "' . $windowColor . '" not available.')
        };
    }
}

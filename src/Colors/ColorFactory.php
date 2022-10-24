<?php

namespace Marius\KiloWindowManufacturer\Colors;

class ColorFactory
{
    /**
     * @throws \Exception
     */
    public function processColor(string $color): ColorInterface
    {

        return match ($color) {
            Blue::NAME => new Blue(),
            Brown::NAME => new Brown(),
            Red::NAME => new Red(),
            default => throw new \Exception('Color "' . $color . '" not available.')
        };
    }
}

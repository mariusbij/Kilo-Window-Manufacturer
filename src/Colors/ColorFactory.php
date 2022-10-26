<?php

namespace Marius\KiloWindowManufacturer\Colors;

class ColorFactory
{
    /**
     * @throws \Exception
     */
    public static function processColor(string $windowColor): ColorInterface
    {
        return match ($windowColor) {
            Blue::NAME => new Blue(),
            Brown::NAME => new Brown(),
            Red::NAME => new Red(),
            default => throw new \Exception('Color "' . $windowColor . '" not available.')
        };
    }
}

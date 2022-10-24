<?php

namespace Marius\Kilo\Windows\Colors;

class ColorFactory
{
    /**
     * @throws \Exception
     */
    public function createColor(string $color): ColorInterface {

        return match ($color) {
            Blue::NAME => new Blue(),
            Brown::NAME => new Brown(),
            Red::NAME => new Red(),
            default => throw new \Exception('Color "' . $color . '" not available.')
        };
    }
}
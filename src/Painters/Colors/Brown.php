<?php

namespace Marius\KiloWindowManufacturer\Painters\Colors;

class Brown implements ColorInterface
{
    public const NAME = 'brown';

    public function getDescription(): string
    {
        return self::NAME;
    }
}

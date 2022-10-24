<?php

namespace Marius\KiloWindowManufacturer\Colors;

class Brown implements ColorInterface
{
    public const NAME = 'brown';

    public function getDescription(): string
    {
        return self::NAME;
    }
}

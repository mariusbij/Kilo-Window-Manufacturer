<?php

namespace Marius\KiloWindowManufacturer\Colors;

class Brown implements ColorInterface
{
    const NAME = 'brown';

    public function getDescription(): string
    {
        return self::NAME;
    }
}
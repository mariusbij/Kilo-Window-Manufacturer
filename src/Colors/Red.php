<?php

namespace Marius\KiloWindowManufacturer\Colors;

class Red implements ColorInterface
{
    const NAME = 'red';

    public function getDescription(): string
    {
        return self::NAME;
    }
}
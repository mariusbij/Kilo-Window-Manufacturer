<?php

namespace Marius\KiloWindowManufacturer\Painters\Colors;

class Red implements ColorInterface
{
    public const NAME = 'red';

    public function getDescription(): string
    {
        return self::NAME;
    }
}

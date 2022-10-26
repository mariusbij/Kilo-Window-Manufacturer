<?php

namespace Marius\KiloWindowManufacturer\Colors;

class Blue implements ColorInterface
{
    public const NAME = 'blue';

    public function getDescription(): string
    {
        return self::NAME;
    }
}

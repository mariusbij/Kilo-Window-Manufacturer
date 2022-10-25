<?php

namespace Marius\KiloWindowManufacturer\Painters\Colors;

class Blue implements ColorInterface
{
    public const NAME = 'blue';

    public function getDescription(): string
    {
        return self::NAME;
    }
}

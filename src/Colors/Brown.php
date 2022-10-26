<?php

namespace Marius\KiloWindowManufacturer\Colors;

class Brown extends Color implements ColorInterface
{
    public const NAME = 'brown';

    public function __construct()
    {
        $this->setDescription(self::NAME);
    }
}

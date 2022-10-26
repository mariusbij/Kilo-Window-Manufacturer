<?php

namespace Marius\KiloWindowManufacturer\Colors;

class Red extends Color implements ColorInterface
{
    public const NAME = 'red';

    public function __construct()
    {
        $this->setDescription(self::NAME);
    }
}

<?php

namespace Marius\KiloWindowManufacturer\Colors;

class Blue extends Color implements ColorInterface
{
    public const NAME = 'blue';

    public function __construct()
    {
        $this->setDescription(self::NAME);
    }
}

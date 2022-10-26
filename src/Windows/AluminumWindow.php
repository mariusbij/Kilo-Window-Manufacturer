<?php

namespace Marius\KiloWindowManufacturer\Windows;

class AluminumWindow extends Window implements WindowInterface
{
    public const TYPE = 'aluminum';

    public function __construct()
    {
        $this->setDescription(self::TYPE);
    }
}

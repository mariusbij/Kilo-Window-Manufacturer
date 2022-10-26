<?php

namespace Marius\KiloWindowManufacturer\Windows;

class PlasticWindow extends Window implements WindowInterface
{
    public const TYPE = 'plastic';

    public function __construct()
    {
        $this->setDescription(self::TYPE);
    }
}

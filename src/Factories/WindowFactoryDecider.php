<?php

namespace Marius\KiloWindowManufacturer\Factories;

use Marius\KiloWindowManufacturer\Windows\AluminumWindow;
use Marius\KiloWindowManufacturer\Windows\PlasticWindow;

class WindowFactoryDecider
{
    /**
     * @throws \Exception
     */
    public function getAppropriateFactory(string $type): WindowFactoryInterface {

        return match ($type) {
            AluminumWindow::TYPE => new AluminumWindowFactory(),
            PlasticWindow::TYPE => new PlasticWindowFactory(),
            default => throw new \Exception('Window type "' . $type . '" not available.')
        };
    }
}
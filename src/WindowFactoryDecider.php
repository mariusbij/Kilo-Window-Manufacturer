<?php

namespace Marius\Kilo;

use Marius\Kilo\Factories\AluminumWindowFactory;
use Marius\Kilo\Factories\PlasticWindowFactory;
use Marius\Kilo\Factories\WindowFactoryInterface;
use Marius\Kilo\Windows\AluminumWindow;
use Marius\Kilo\Windows\PlasticWindow;

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
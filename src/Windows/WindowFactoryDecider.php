<?php

namespace Marius\Kilo\Windows;

use Marius\Kilo\Windows\Factories\AluminumWindowFactory;
use Marius\Kilo\Windows\Factories\PlasticWindowFactory;
use Marius\Kilo\Windows\Factories\WindowFactoryInterface;
use Marius\Kilo\Windows\Windows\AluminumWindow;
use Marius\Kilo\Windows\Windows\PlasticWindow;

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
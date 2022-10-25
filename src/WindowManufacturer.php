<?php

namespace Marius\KiloWindowManufacturer;

use Marius\KiloWindowManufacturer\Factories\WindowFactoryDecider;
use Marius\KiloWindowManufacturer\Painters\Painter;
use Marius\KiloWindowManufacturer\Windows\WindowInterface;

class WindowManufacturer
{
    public function manufactureWindow(string $windowType, string $windowColor): WindowInterface
    {
        try {
            $windowFactoryDecider = new WindowFactoryDecider();
            $windowFactory = $windowFactoryDecider->getAppropriateFactory($windowType);

            $window = $windowFactory->makeWindow();
            $window->setExpert($windowFactory->makeWindowExpert());

            $painter = new Painter();
            $painter->paintWindow($window, $windowColor);
        } catch (\Exception $e) {
            print_r($e->getMessage());
            exit();
        }
        return $window;
    }
}

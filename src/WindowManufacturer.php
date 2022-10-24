<?php

namespace Marius\Kilo;

use Marius\Kilo\Colors\ColorFactory;
use Marius\Kilo\Experts\WindowExpertInterface;
use Marius\Kilo\Factories\WindowFactoryInterface;
use Marius\Kilo\Windows\WindowInterface;

class WindowManufacturer
{
    public function manufactureWindow(string $windowType, string $windowColor): WindowInterface
    {
        try {
            $windowFactory = $this->getAppropriateWindowFactory($windowType);
            $window = $windowFactory->makeWindow();

            $this->assignWindowExpert($window, $windowFactory->makeWindowExpert());
            $this->paintWindow($window, $windowColor);

        } catch (\Exception $e) {
            print_r($e->getMessage());
            exit();
        }
        return $window;
    }

    /**
     * @throws \Exception
     */
    private function getAppropriateWindowFactory(string $windowType): WindowFactoryInterface
    {
        $windowFactoryDecider = new WindowFactoryDecider();

        return $windowFactoryDecider->getAppropriateFactory($windowType);
    }

    private function assignWindowExpert(WindowInterface $window, WindowExpertInterface $expert): void
    {
        $window->setExpert($expert);
    }

    /**
     * @throws \Exception
     */
    private function paintWindow(WindowInterface $window, string $windowColor): void
    {
        $colorFactory = new ColorFactory();
        $color = $colorFactory->processColor($windowColor);
        $window->setColor($color);
    }
}
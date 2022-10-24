<?php

namespace Marius\KiloWindowManufacturer\Tests\Feature;

use Marius\KiloWindowManufacturer\WindowManufacturer;
use PHPUnit\Framework\TestCase;

class WindowManufacturerTest extends TestCase
{
    public function test_window_aluminum_red(): void
    {
        $windowManufacturer = new WindowManufacturer();
        $window = $windowManufacturer->manufactureWindow('aluminum', 'red');

        $this->assertEquals('aluminum window', $window->getDescription());
        $this->assertEquals('Aluminum window expert', $window->getExpert()->getDescription());
        $this->assertEquals('red', $window->getColor()->getDescription());
    }

    public function test_window_plastic_blue(): void
    {
        $windowManufacturer = new WindowManufacturer();
        $window = $windowManufacturer->manufactureWindow('plastic', 'blue');

        $this->assertEquals('plastic window', $window->getDescription());
        $this->assertEquals('Plastic window expert', $window->getExpert()->getDescription());
        $this->assertEquals('blue', $window->getColor()->getDescription());
    }

    public function test_window_aluminum_brown(): void
    {
        $windowManufacturer = new WindowManufacturer();
        $window = $windowManufacturer->manufactureWindow('aluminum', 'brown');

        $this->assertEquals('aluminum window', $window->getDescription());
        $this->assertEquals('Aluminum window expert', $window->getExpert()->getDescription());
        $this->assertEquals('brown', $window->getColor()->getDescription());
    }
}
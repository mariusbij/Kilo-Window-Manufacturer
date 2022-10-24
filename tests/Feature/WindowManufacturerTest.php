<?php

namespace Marius\KiloWindowManufacturer\Tests\Feature;

use Marius\KiloWindowManufacturer\WindowManufacturer;
use PHPUnit\Framework\TestCase;

class WindowManufacturerTest extends TestCase
{
    public function testWindowAluminumRed(): void
    {
        $windowManufacturer = new WindowManufacturer();
        $window = $windowManufacturer->manufactureWindow('aluminum', 'red');

        $this->assertEquals('aluminum window', $window->getDescription());
        $this->assertEquals('aluminum window expert', $window->getExpert()->getDescription());
        $this->assertEquals('red', $window->getColor()->getDescription());
    }

    public function testWindowPlasticBlue(): void
    {
        $windowManufacturer = new WindowManufacturer();
        $window = $windowManufacturer->manufactureWindow('plastic', 'blue');

        $this->assertEquals('plastic window', $window->getDescription());
        $this->assertEquals('plastic window expert', $window->getExpert()->getDescription());
        $this->assertEquals('blue', $window->getColor()->getDescription());
    }

    public function testWindowAluminumBrown(): void
    {
        $windowManufacturer = new WindowManufacturer();
        $window = $windowManufacturer->manufactureWindow('aluminum', 'brown');

        $this->assertEquals('aluminum window', $window->getDescription());
        $this->assertEquals('aluminum window expert', $window->getExpert()->getDescription());
        $this->assertEquals('brown', $window->getColor()->getDescription());
    }
}

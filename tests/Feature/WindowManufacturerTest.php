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

        $this->assertEquals('This is a aluminum window', $window->getDescription());
        $this->assertEquals('I was installed by aluminum window expert', $window->getExpertDescription());
        $this->assertEquals('I am red', $window->getColorDescription());
    }

    public function testWindowPlasticBlue(): void
    {
        $windowManufacturer = new WindowManufacturer();
        $window = $windowManufacturer->manufactureWindow('plastic', 'blue');

        $this->assertEquals('This is a plastic window', $window->getDescription());
        $this->assertEquals('I was installed by plastic window expert', $window->getExpertDescription());
        $this->assertEquals('I am blue', $window->getColorDescription());
    }

    public function testWindowAluminumBrown(): void
    {
        $windowManufacturer = new WindowManufacturer();
        $window = $windowManufacturer->manufactureWindow('aluminum', 'brown');

        $this->assertEquals('This is a aluminum window', $window->getDescription());
        $this->assertEquals('I was installed by aluminum window expert', $window->getExpertDescription());
        $this->assertEquals('I am brown', $window->getColorDescription());
    }
}

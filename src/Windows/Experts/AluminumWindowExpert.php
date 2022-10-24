<?php

namespace Marius\Kilo\Windows\Experts;

class AluminumWindowExpert implements WindowExpertInterface
{
    private string $description = 'Aluminum window expert';

    public function getDescription(): string
    {
        return $this->description;
    }
}
<?php

namespace Marius\Kilo\Windows\Experts;

class PlasticWindowExpert implements WindowExpertInterface
{
    private string $description = 'Aluminum window expert';

    public function getDescription(): string
    {
        return $this->description;
    }
}
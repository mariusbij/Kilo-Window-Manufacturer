<?php

namespace Marius\KiloWindowManufacturer\Colors;

abstract class Color implements ColorInterface
{
    protected string $description;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}

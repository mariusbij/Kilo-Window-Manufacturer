<?php

namespace Marius\Kilo\Windows\Colors;

class Red implements ColorInterface
{
    const NAME = 'red';

    public function getDescription(): string
    {
        return self::NAME;
    }
}
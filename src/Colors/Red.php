<?php

namespace Marius\Kilo\Colors;

class Red implements ColorInterface
{
    const NAME = 'red';

    public function getDescription(): string
    {
        return self::NAME;
    }
}
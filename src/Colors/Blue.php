<?php

namespace Marius\Kilo\Colors;

class Blue implements ColorInterface
{
    const NAME = 'blue';

    public function getDescription(): string
    {
        return self::NAME;
    }
}
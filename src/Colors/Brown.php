<?php

namespace Marius\Kilo\Colors;

class Brown implements ColorInterface
{
    const NAME = 'brown';

    public function getDescription(): string
    {
        return self::NAME;
    }
}
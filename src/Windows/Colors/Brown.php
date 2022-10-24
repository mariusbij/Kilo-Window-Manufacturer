<?php

namespace Marius\Kilo\Windows\Colors;

class Brown implements ColorInterface
{
    const NAME = 'brown';

    public function getDescription(): string
    {
        return self::NAME;
    }
}
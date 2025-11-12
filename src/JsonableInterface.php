<?php

declare(strict_types=1);

namespace Vigihdev\Contracts;

interface JsonableInterface
{
    public function toJson(int $options = 0): string;
}

<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\GoogleMaps;

interface SizeInterface
{
    public function getWidth(): int;

    public function getHeight(): int;
}
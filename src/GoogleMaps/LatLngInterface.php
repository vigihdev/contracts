<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\GoogleMaps;

interface LatLngInterface
{
    public function getLat(): float;

    public function getLng(): float;
}
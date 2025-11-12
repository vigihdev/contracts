<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\GoogleMaps;

interface InfoWindowContentInterface
{
    public function getImageUrl(): string;

    public function getTitle(): string;

    public function getRating(): float|int;

    public function getJumlahUlasan(): int;
}
<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Vehicle;

interface VehicleCompactInterface
{
    public function getNamaMobil(): string;
    public function getImageUrl(): string;
    public function getTipeMobil(): string;
    public function getActionUrl(): string;
}

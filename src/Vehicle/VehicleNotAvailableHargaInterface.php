<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Vehicle;

interface VehicleNotAvailableHargaInterface
{
    public function getHarga(): string;
    public function getPaketSewa(): string;
}

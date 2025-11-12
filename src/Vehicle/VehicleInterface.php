<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Vehicle;

interface VehicleInterface
{
    public function getNamaMobil(): string;
    public function getImageUrl(): string;
    public function getHarga(): int;
    public function getPaketSewa(): string;
    public function getTipeMobil(): string;
    public function getActionUrl(): string;
}

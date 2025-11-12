<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\GoogleMaps;

interface InfoWindowInterface
{
    public function getAriaLabel(): string;

    public function getContent(): ?string;

    public function isDisableAutoPan(): bool;

    public function getHeaderContent(): string;

    public function isHeaderDisabled(): bool;

    public function getMaxWidth(): int;

    public function getMinWidth(): int;

    public function getPixelOffset(): SizeInterface;

    public function getPosition(): LatLngInterface;

    public function getZIndex(): int;
}
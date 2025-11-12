<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\GoogleMaps;

interface MapsInterface
{
    public function getZoom(): int;

    public function isMapTypeControl(): bool;

    public function isFullscreenControl(): bool;

    public function isPanControl(): bool;

    public function isScaleControl(): bool;

    public function getCenter(): LatLngInterface;

    public function getMarker(): MarkerInterface;

    public function getStyle(): string;

    public function getInfoWindow(): InfoWindowInterface;
}
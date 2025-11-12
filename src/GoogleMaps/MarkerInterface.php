<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\GoogleMaps;

interface MarkerInterface
{
    public function getAnchorPoint(): mixed;

    public function getAnimation(): mixed;

    public function isClickable(): bool;

    public function getCollisionBehavior(): string;

    public function isCrossOnDrag(): bool;

    public function getCursor(): string;

    public function isDraggable(): bool;

    public function getIcon(): string;

    public function getLabel(): string;

    public function getMap(): mixed;

    public function getOpacity(): int;

    public function isOptimized(): bool;

    public function getPosition(): LatLngInterface;

    public function getShape(): mixed;

    public function getTitle(): string;

    public function isVisible(): bool;

    public function getZIndex(): int;
}
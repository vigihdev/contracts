<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Widgets;

interface AboutUsInterface
{
    public function getLogoUrl(): string;
    public function getDescription(): string;
}

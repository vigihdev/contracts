<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Widgets;

interface OurClientInterface
{
    public function getName(): string;
    public function getImageUrl(): string;
}

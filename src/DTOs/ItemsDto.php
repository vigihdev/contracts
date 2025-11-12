<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\DTOs;

use Vigihdev\Contracts\Bootstrap\ItemsInterface;

class ItemsDto implements ItemsInterface
{
    public function __construct(
        private readonly array $items
    ) {}

    public function getItems(): array
    {
        return $this->items;
    }
}

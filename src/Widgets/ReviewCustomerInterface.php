<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Widgets;

interface ReviewCustomerInterface
{
    public function getUsername(): string;

    public function getRating(): float|int;

    public function getImageUrl(): string;

    public function getReviewText(): string;
}

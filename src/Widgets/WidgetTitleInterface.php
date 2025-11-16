<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Widgets;

interface WidgetTitleInterface
{

    public function getTitle(): string;
    public function getName(): string;
}

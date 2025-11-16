<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Widgets;

interface PostCardInterface
{
    public function getTitle(): string;
    public function getImageUrl(): string;
    public function getActionUrl(): string;
    public function getSnippet(): string;
}

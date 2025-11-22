<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Widgets;

interface PostCompactCardInterface extends PostCardInterface
{
    public function getAuthor(): string;
    public function getPublishedDate(): string;
    public function getKategori(): string;
}

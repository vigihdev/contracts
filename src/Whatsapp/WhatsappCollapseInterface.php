<?php

declare(strict_types=1);

namespace Vigihdev\Contracts;

interface WhatsappCollapseInterface
{

    public function getTitle(): string;

    public function getDescription(): string;
}

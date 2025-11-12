<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Service;

interface ServiceManagerInterface
{


    public function transformerDto(string $name): mixed;

    /**
     * @return array<string> List of available service names
     */
    public function getAvailableServiceNames(): array;

    public function hasService(string $name): bool;
}

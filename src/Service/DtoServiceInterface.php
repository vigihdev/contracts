<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Service;

interface DtoServiceInterface
{
    public function getName(): string;
    public function getClassDto(): string;
    public function getPathDto(): string;
}

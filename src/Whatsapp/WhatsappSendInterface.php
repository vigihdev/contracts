<?php

declare(strict_types=1);

namespace Vigihdev\Contracts;

interface WhatsappSendInterface
{

    public function getContactNumber(): string;
    public function getUsername(): string;
    public function getImageUrl(): string;
    public function getMessage(): string;
}

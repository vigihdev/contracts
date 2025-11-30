<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Whatsapp;

interface WhatsAppSenderInterface
{
    public function getPhone(): string;
    public function getText(): string;
    public function getEndpointUrl(): string;
}

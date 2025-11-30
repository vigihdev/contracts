<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Whatsapp;

interface WhatsAppMessageInterface
{

    public function getPhone(): string;
    public function getText(): string;
}

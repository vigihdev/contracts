<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\Widgets;

interface QuestionAnswerInterface
{
    public function getQuestion(): string;
    public function getAnswers(): array;
}

<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\OwlCarousel;

interface ImageSliderOwlCarouselInterface
{

    public function getName(): string;

    public function getImageUrl(): string;
}

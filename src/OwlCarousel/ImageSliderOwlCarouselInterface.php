<?php

declare(strict_types=1);

namespace Vigihdev\Contracts\OwlCarousel;

interface ImageSliderOwlCarouselInterface
{

    /**
     *
     * @return string
     */
    public function getName(): string;

    public function getImageUrl(): string;
}

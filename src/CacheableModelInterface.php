<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

interface CacheableModelInterface extends ModelInterface
{
    public function getDto(): CacheableDtoInterface;
}

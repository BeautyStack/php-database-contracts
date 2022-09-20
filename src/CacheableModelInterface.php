<?php

namespace Beautystack\Database\Contracts;

interface CacheableModelInterface extends ModelInterface
{
    public function getDto() : CacheableDtoInterface;
}
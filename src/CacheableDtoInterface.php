<?php

namespace Beautystack\Database\Contracts;

use Beautystack\Value\Contracts\Identity\Id;
use JsonSerializable;

interface CacheableDtoInterface extends JsonSerializable
{
    public function getId(): Id;
}
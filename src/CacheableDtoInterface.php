<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Beautystack\Value\Contracts\Identity\IdInterface;
use JsonSerializable;

interface CacheableDtoInterface extends JsonSerializable
{
    public function getId(): IdInterface;
}

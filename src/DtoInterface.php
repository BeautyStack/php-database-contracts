<?php

namespace Beautystack\Database\Contracts;

use Beautystack\Value\Contracts\Identity\Id;
use JsonSerializable;

interface DtoInterface extends JsonSerializable
{
    public function getId(): Id;
}
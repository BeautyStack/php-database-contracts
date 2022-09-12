<?php

namespace Beautystack\Database\Contracts;

use Beautystack\Value\Contracts\Identity\Id;

interface ModelInterface
{
    public function getId() : Id;
    public function getDto() : DtoInterface;
}
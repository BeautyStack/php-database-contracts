<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Beautystack\Value\Contracts\Identity\Id;

interface ModelInterface
{
    public function getId(): Id;
}

<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Beautystack\Value\Contracts\Identity\IdInterface;

interface ModelInterface
{
    public function getId(): IdInterface;
}

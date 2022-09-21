<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Serializable;

interface SerializableModelInterface extends ModelInterface, Serializable
{
}

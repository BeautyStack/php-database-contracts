<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use JsonSerializable;

interface SerializableModelInterface extends ModelInterface, JsonSerializable
{
}

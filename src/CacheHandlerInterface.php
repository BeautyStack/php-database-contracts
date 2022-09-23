<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Beautystack\Value\Contracts\Identity\IdInterface;

interface CacheHandlerInterface
{
    public function delete(IdInterface $id, string $className, int $version): void;

    public function get(IdInterface $id, string $className, int $version): CacheableDtoInterface | null;

    public function set(CacheableDtoInterface $dto, int | null $ttl = null): void;

    public function getIdFromAlias(string $alias, string $className): IdInterface | null;

    public function setIdByAlias(IdInterface $id, string $alias, string $class): void;
}

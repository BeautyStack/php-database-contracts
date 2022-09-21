<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Beautystack\Value\Contracts\Identity\Id;

interface CacheHandlerInterface
{
    public function delete(Id $id, string $className, int $version): void;

    public function get(Id $id, string $className, int $version): CacheableDtoInterface | null;

    public function set(CacheableDtoInterface $dto, int | null $ttl = null): void;

    public function getIdFromAlias(string $alias, string $className): Id | null;

    public function setIdByAlias(Id $id, string $alias, string $class): void;
}

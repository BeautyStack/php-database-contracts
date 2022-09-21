<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Beautystack\Database\Contracts\Exception\DuplicateEntityException;
use Beautystack\Database\Contracts\Exception\EntityClassMismatchException;
use Beautystack\Database\Contracts\Exception\EntityNotFoundException;
use Beautystack\Value\Contracts\Identity\Id;

interface RepositoryInterface
{
    /**
     * @throws EntityNotFoundException|EntityClassMismatchException
     */
    public function findById(Id $id): ModelInterface;

    /**
     * @throws DuplicateEntityException
     */
    public function persist(ModelInterface $model): void;

    public function exists(Id $id): bool;
}

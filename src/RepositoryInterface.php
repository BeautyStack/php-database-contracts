<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Beautystack\Database\Contracts\Exception\DuplicateEntityException;
use Beautystack\Database\Contracts\Exception\EntityClassMismatchException;
use Beautystack\Database\Contracts\Exception\EntityNotFoundException;
use Beautystack\Value\Contracts\Identity\IdInterface;

interface RepositoryInterface
{
    /**
     * @throws EntityNotFoundException|EntityClassMismatchException
     */
    public function findById(IdInterface $id): ModelInterface;

    /**
     * @throws DuplicateEntityException
     */
    public function persist(ModelInterface $model): void;

    public function exists(IdInterface $id): bool;
}

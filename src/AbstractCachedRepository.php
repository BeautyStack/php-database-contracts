<?php

namespace Beautystack\Database\Contracts;

use InvalidArgumentException;

abstract class AbstractCachedRepository implements RepositoryInterface
{
    public function __construct(
        protected null|CacheHandlerInterface $cacheHandler = null
    ) {}

     abstract protected function store(CacheableModelInterface $model): void;

    /**
     * @param CacheableModelInterface $model
     */
     public function persist(ModelInterface $model): void
     {
         if (!$model instanceof CacheableModelInterface) {
             throw new InvalidArgumentException('model is not of type %s', CacheableModelInterface::class);
         }
         $this->store($model);
         if ( $this->cacheHandler !== null) {
             $this->cacheHandler->set($model->getDto());
         }
     }
 }
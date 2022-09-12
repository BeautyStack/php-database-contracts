<?php

namespace Beautystack\Database\Contracts;

abstract class AbstractRepository implements RepositoryInterface
{
    public function __construct(
        protected null|CacheHandlerInterface $cacheHandler = null
    ) {}

     abstract protected function store(ModelInterface $model): void;

     public function persist(ModelInterface $model): void
     {
         $this->store($model);
         if ( $this->cacheHandler !== null) {
             $this->cacheHandler->set($model->getDto());
         }
     }
 }
<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use Beautystack\Database\Contracts\AbstractCachedRepository;
use Beautystack\Database\Contracts\CacheableDtoInterface;
use Beautystack\Database\Contracts\CacheableModelInterface;
use Beautystack\Database\Contracts\CacheHandlerInterface;
use Beautystack\Database\Contracts\ModelInterface;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class AbstractCachedRepositoryTest extends TestCase
{
    protected AbstractCachedRepository $repository;

    public function setUp(): void
    {
        parent::setUp();
        $this->repository = $this->getMockForAbstractClass(AbstractCachedRepository::class);
    }

    public function testItPersists(): void
    {
        $model = $this->getMockForAbstractClass(CacheableModelInterface::class);
        $this->repository->expects(self::once())
            ->method('store')
            ->with($model);
        $this->repository->persist($model);
    }

    public function testItThrowsInvalidArgumentException(): void
    {
        $model = $this->getMockForAbstractClass(ModelInterface::class);
        $this->repository->expects(self::never())->method('store');
        $this->expectException(InvalidArgumentException::class);
        $this->repository->persist($model);
    }

    public function testItCaches(): void
    {
        $cacheHandler = $this->getMockForAbstractClass(CacheHandlerInterface::class);
        $repository = $this->getMockForAbstractClass(AbstractCachedRepository::class, [$cacheHandler]);
        $model = $this->getMockForAbstractClass(CacheableModelInterface::class);
        $repository->expects(self::once())
            ->method('store')
            ->with($model);
        $dto = $this->getMockForAbstractClass(CacheableDtoInterface::class);
        $model->expects(self::once())
            ->method('getDto')
            ->willReturn($dto);
        $cacheHandler->expects(self::once())
            ->method('set')
            ->with($dto);
        $repository->persist($model);
    }
}

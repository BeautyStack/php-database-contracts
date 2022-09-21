<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use Beautystack\Database\Contracts\ModelInterface;
use Beautystack\Database\Contracts\Pagination;
use Beautystack\Database\Contracts\SearchResults;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

class SearchResultsTest extends TestCase
{
    public function testItCreates(): void
    {
        $model = $this->getMockForAbstractClass(ModelInterface::class);
        $pagination = Pagination::create(1, 10);
        $items = new ArrayCollection([$model]);
        $searchResults = SearchResults::create(
            $pagination,
            $items
        );

        self::assertEquals($pagination, $searchResults->getPagination());
        self::assertEquals($items, $searchResults->getItems());
    }
}

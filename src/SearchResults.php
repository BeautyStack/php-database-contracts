<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

use Doctrine\Common\Collections\Collection;

class SearchResults
{
    private function __construct(
        private Pagination $pagination,
        private Collection $items
    ) {
    }

    public static function create(Pagination $pagination, Collection $items): self
    {
        return new self($pagination, $items);
    }

    public function getPagination(): Pagination
    {
        return $this->pagination;
    }

    public function getItems(): Collection
    {
        return $this->items;
    }
}

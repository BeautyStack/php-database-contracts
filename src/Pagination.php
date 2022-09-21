<?php

declare(strict_types=1);

namespace Beautystack\Database\Contracts;

class Pagination
{
    private function __construct(
        private int $page,
        private int $perPage
    ) {
    }

    public static function create(int $page, int $perPage): self
    {
        return new self($page, $perPage);
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }
}

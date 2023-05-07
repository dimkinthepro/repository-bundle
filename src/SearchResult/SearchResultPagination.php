<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\SearchResult;

class SearchResultPagination implements SearchResultPaginationInterface
{
    public function __construct(
        private readonly array $items,
        private readonly int $total,
    ) {
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getCount(): int
    {
        return \count($this->items);
    }

    public function getTotal(): int
    {
        return $this->total;
    }
}

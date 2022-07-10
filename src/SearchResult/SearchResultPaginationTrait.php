<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\SearchResult;

trait SearchResultPaginationTrait
{
    protected array $items = [];
    protected int $count = 0;
    protected int $total = 0;

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): void
    {
        $this->setCount(count($items));
        $this->items = $items;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): void
    {
        $this->total = $total;
    }
}

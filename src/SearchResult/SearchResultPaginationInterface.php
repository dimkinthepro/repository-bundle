<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\SearchResult;

interface SearchResultPaginationInterface
{
    public function getItems(): array;

    public function getCount(): int;

    public function getTotal(): int;
}

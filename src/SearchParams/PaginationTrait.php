<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\SearchParams;

trait PaginationTrait
{
    private ?int $offset = null;
    private ?int $limit = null;
    private array $sortBy = [];

    public function getOffset(): ?int
    {
        return $this->offset;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function getSortBy(): array
    {
        return $this->sortBy;
    }

    public function setSortBy(array $sortBy): void
    {
        $result = [];
        foreach ($sortBy as $field => $order) {
            if (\in_array(strtoupper($order), ['ASC', 'DESC'], true)) {
                $result[$field] = strtoupper($order);
            }
        }

        $this->sortBy = $result;
    }
}

<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\SearchParam;

trait SearchParamPaginationTrait
{
    protected ?int $offset = null;
    protected ?int $limit = null;
    protected int $limitMax = 100;
    protected array $sortBy = [];

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
        $this->limit = min($limit, $this->limitMax);
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

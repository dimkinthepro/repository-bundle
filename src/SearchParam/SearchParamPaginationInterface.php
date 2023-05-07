<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\SearchParam;

interface SearchParamPaginationInterface
{
    public function getOffset(): ?int;

    public function getLimit(): ?int;

    /**
     * @return array<string, string>
     */
    public function getSortBy(): array;
}

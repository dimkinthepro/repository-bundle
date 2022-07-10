<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\Repository;

use Dimkinthepro\RepositoryBundle\SearchParam\SearchParamPaginationInterface;
use Doctrine\ORM\QueryBuilder;

trait PaginationRepositoryTrait
{
    protected function setPagination(QueryBuilder $qb, SearchParamPaginationInterface $param): void
    {
        if (null !== $param->getLimit()) {
            $qb->setMaxResults($param->getLimit());
        }

        if (null !== $param->getOffset()) {
            $qb->setFirstResult($param->getOffset());
        }

        foreach ($param->getSortBy() as $sortField => $sortDirection) {
            $qb->orderBy($sortField, $sortDirection);
        }
    }
}

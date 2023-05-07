<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\Repository;

trait FieldNameBuilderTrait
{
    abstract protected function getTablePrefix(): string;

    protected function buildFieldName(string $field): string
    {
        $fieldParts = [
            $this->getTablePrefix(),
            $field,
        ];

        return implode('.', $fieldParts);
    }
}

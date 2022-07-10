<?php

declare(strict_types=1);

namespace Dimkinthepro\RepositoryBundle\Repository;

trait FieldNameBuilderTrait
{
    abstract protected function getDefaultPrefix(): string;

    /**
     * To get field name like "u.id", or just "u"
     */
    protected function buildFieldName(?string $field = null): string
    {
        $fieldParts = [
            $this->getDefaultPrefix(),
            $field,
        ];

        return implode('.', array_filter($fieldParts));
    }
}

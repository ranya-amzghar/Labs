<?php

namespace App\Services;

abstract class BaseService
{
    protected function normalizeText(string $value): string
    {
        return trim($value);
    }

    protected function validateRequired(string $fieldName, string $value): void
    {
        if ($this->normalizeText($value) === '') {
            throw new \InvalidArgumentException(sprintf('%s ne peut pas être vide.', $fieldName));
        }
    }
}

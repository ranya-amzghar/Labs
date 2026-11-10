<?php

namespace App\Exceptions;

use RuntimeException;

class ValidationException extends RuntimeException
{
    private string $field;

    public function __construct(string $field, string $message)
    {
        $this->field = $field;
        parent::__construct($message);
    }

    public function getField(): string
    {
        return $this->field;
    }
}

<?php

namespace App\Models;

use App\Traits\HasTimestamps;

class Section
{
    use HasTimestamps;

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->initializeTimestamps();
    }

    public function describe(): string
    {
        return "Section : " . $this->name
            . " | Créée le : " . $this->getCreatedAt()
            . " | Modifiée le : " . $this->getUpdatedAt();
    }

    public function getName(): string
    {
        return $this->name;
    }
}

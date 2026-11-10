<?php

namespace App\Models;

use App\Traits\HasTimestamps;

class Article
{
    use HasTimestamps;

    private string $title;
    private string $content;
    private Section $section;

    public function __construct(string $title, string $content, Section $section)
    {
        $this->title = $title;
        $this->content = $content;
        $this->section = $section;
        $this->initializeTimestamps();
    }

    public function describe(): string
    {
        return "Article : " . $this->title
            . " [" . $this->section->getName() . "]"
            . " | Créé le : " . $this->getCreatedAt()
            . " | Modifié le : " . $this->getUpdatedAt();
    }

    public function markAsUpdated(): void
    {
        $this->updateTimestamp();
    }
}

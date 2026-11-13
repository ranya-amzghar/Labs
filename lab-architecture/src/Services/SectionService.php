<?php

namespace App\Services;

use App\DAO\SectionDAO;
use App\Models\Section;

class SectionService extends BaseService
{
    public function __construct(private SectionDAO $sectionDao)
    {
    }

    public function getAllSections(): array
    {
        return $this->sectionDao->findAll();
    }

    public function createSection(string $title, string $description): Section
    {
        $cleanTitle = $this->normalizeText($title);
        $cleanDescription = $this->normalizeText($description);

        $this->validateRequired('Le titre de la section', $cleanTitle);
        $this->validateRequired('La description de la section', $cleanDescription);

        $section = new Section(0, $cleanTitle, $cleanDescription);

        return $this->sectionDao->insert($section);
    }
}

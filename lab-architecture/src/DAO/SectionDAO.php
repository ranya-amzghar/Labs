<?php

namespace App\DAO;

use App\Config\Database;
use App\Models\Section;

class SectionDAO
{
    public function findAll(): array
    {
        $rows = Database::read();
        $sections = [];

        foreach ($rows as $row) {
            $sections[] = new Section(
                (int) $row['id'],
                $row['title'],
                $row['description']
            );
        }

        return $sections;
    }

    public function insert(Section $section): Section
    {
        $rows = Database::read();
        $nextId = count($rows) + 1;

        $section->setId($nextId);
        $rows[] = [
            'id' => $nextId,
            'title' => $section->getTitle(),
            'description' => $section->getDescription(),
        ];

        Database::write($rows);

        return $section;
    }
}

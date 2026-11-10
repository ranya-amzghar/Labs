<?php

namespace App\Services;

use App\Exceptions\ValidationException;
use App\Models\Article;
use App\Models\Section;

class ArticleService
{
    public function create(string $title, string $content, Section $section): Article
    {
        if (trim($title) === '') {
            throw new ValidationException('titre', 'Le titre est obligatoire.');
        }

        if (strlen(trim($content)) < 10) {
            throw new ValidationException(
                'contenu',
                'Le contenu doit contenir au moins 10 caractères.'
            );
        }

        return new Article($title, $content, $section);
    }
}

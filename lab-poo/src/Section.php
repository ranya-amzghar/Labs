<?php

require_once __DIR__ . '/NewsItem.php';
require_once __DIR__ . '/Article.php';

class Section extends NewsItem
{
    private array $articles = [];

    public function addArticle(Article $article): void
    {
        $this->articles[] = $article;
    }

    public function getArticles(): array
    {
        return $this->articles;
    }

    public function getType(): string
    {
        return 'Section';
    }

    public function publish(): string
    {
        $articleTitles = array_map(
            static fn (Article $article): string => $article->getTitle(),
            $this->articles
        );

        $articleList = $articleTitles === []
            ? 'Aucun article pour le moment.'
            : implode(', ', $articleTitles);

        return sprintf("Section : %s\nArticles : %s", $this->title, $articleList);
    }
}

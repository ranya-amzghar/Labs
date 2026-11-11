<?php

require_once __DIR__ . '/NewsItem.php';
require_once __DIR__ . '/Journalist.php';

class Article extends NewsItem
{
    private string $body;
    private Journalist $author;

    public function __construct(string $title, string $body, Journalist $author)
    {
        if (trim($body) === '') {
            throw new InvalidArgumentException('Le contenu de l’article ne peut pas être vide.');
        }

        parent::__construct($title);

        $this->body = $body;
        $this->author = $author;
    }

    public function getType(): string
    {
        return 'Article';
    }

    public function getAuthor(): Journalist
    {
        return $this->author;
    }

    public function publish(): string
    {
        return sprintf(
            "Article : %s\nAuteur : %s\n%s",
            $this->title,
            $this->author->getName(),
            $this->body
        );
    }
}

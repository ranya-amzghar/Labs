<?php

require_once __DIR__ . '/Publishable.php';

abstract class NewsItem implements Publishable
{
    private static int $createdCount = 0;

    private int $id;
    protected string $title;

    public function __construct(string $title)
    {
        if (trim($title) === '') {
            throw new InvalidArgumentException('Le titre ne peut pas être vide.');
        }

        self::$createdCount++;
        $this->id = self::$createdCount;
        $this->title = $title;
    }

    public static function getCreatedCount(): int
    {
        return self::$createdCount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    abstract public function getType(): string;
}

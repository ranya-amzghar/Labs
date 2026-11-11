<?php

require_once __DIR__ . '/Publishable.php';

class Journalist implements Publishable
{
    private string $name;

    public function __construct(string $name)
    {
        if (trim($name) === '') {
            throw new InvalidArgumentException('Le nom du journaliste ne peut pas être vide.');
        }

        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return 'Journaliste : ' . $this->name;
    }

    public function publish(): string
    {
        return 'Profil journaliste — ' . $this->name;
    }
}

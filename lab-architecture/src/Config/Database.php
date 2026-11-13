<?php

namespace App\Config;

class Database
{
    private static string $dataFile = __DIR__ . '/../../data/sections.json';

    public static function getDataFile(): string
    {
        $directory = dirname(self::$dataFile);

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        if (!file_exists(self::$dataFile)) {
            file_put_contents(self::$dataFile, "[]");
        }

        return self::$dataFile;
    }

    public static function read(): array
    {
        $content = file_get_contents(self::getDataFile());

        if ($content === false || trim($content) === '') {
            return [];
        }

        $data = json_decode($content, true);

        return is_array($data) ? $data : [];
    }

    public static function write(array $data): void
    {
        file_put_contents(
            self::getDataFile(),
            json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }
}

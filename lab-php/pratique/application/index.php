<?php

use App\Exceptions\ValidationException;
use App\Models\Article;
use App\Models\Section;
use App\Services\ArticleService;

require_once __DIR__ . '/src/Exceptions/ValidationException.php';
require_once __DIR__ . '/src/Traits/HasTimestamps.php';
require_once __DIR__ . '/src/Models/Article.php';
require_once __DIR__ . '/src/Models/Section.php';
require_once __DIR__ . '/src/Services/ArticleService.php';

$service = new ArticleService();

echo "=== Création d'un article valide ===" . PHP_EOL;

try {
    $section = new Section('Technologie');
    $article = $service->create(
        'Découvrir PHP',
        'Les exceptions, namespaces et traits structurent une application PHP.',
        $section
    );

    echo $section->describe() . PHP_EOL;
    echo $article->describe() . PHP_EOL;
} catch (ValidationException $exception) {
    echo "Erreur sur le champ '" . $exception->getField() . "' : "
        . $exception->getMessage() . PHP_EOL;
}

echo PHP_EOL . "=== Gestion d'une validation invalide ===" . PHP_EOL;

try {
    $service->create('', 'Ce contenu est suffisamment long pour le test.', new Section('Technologie'));
} catch (ValidationException $exception) {
    echo "Erreur sur le champ '" . $exception->getField() . "' : "
        . $exception->getMessage() . PHP_EOL;
}

<?php

require_once __DIR__ . '/src/Journalist.php';
require_once __DIR__ . '/src/Article.php';
require_once __DIR__ . '/src/Section.php';

$journalist = new Journalist('Ranya Amzghar');
$section = new Section('Technologie');
$article = new Article(
    'Organiser une application d’actualités',
    'La programmation orientée objet aide à structurer les éléments de l’application.',
    $journalist
);

$section->addArticle($article);

$items = [$journalist, $section, $article];

foreach ($items as $item) {
    echo $item->publish() . PHP_EOL . PHP_EOL;
}

echo 'Nombre de contenus créés : ' . NewsItem::getCreatedCount() . PHP_EOL;

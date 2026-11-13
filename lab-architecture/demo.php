<?php

require_once __DIR__ . '/src/bootstrap.php';

use App\DAO\SectionDAO;
use App\Services\SectionService;

$sectionService = new SectionService(new SectionDAO());

$initialSections = $sectionService->getAllSections();

if ($initialSections === []) {
    $sectionService->createSection('Actualités', 'Les événements importants du jour.');
    $sectionService->createSection('Économie', 'Les tendances et les chiffres du marché.');
}

$sections = $sectionService->getAllSections();

echo "Sections disponibles :\n";
foreach ($sections as $section) {
    echo sprintf("- %d. %s : %s\n", $section->getId(), $section->getTitle(), $section->getDescription());
}

$newSection = $sectionService->createSection('Culture', 'Les sorties, spectacles et loisirs.');

echo "\nNouvelle section ajoutée : {$newSection->getTitle()}\n";

<?php

/**
 * Lab PHP — Namespace
 *
 * Cet exemple montre comment :
 * - Déclarer un namespace pour organiser les classes.
 * - Utiliser l'instruction use pour importer une classe.
 * - Éviter les conflits de noms entre classes.
 *
 * Note : dans un vrai projet, chaque classe serait dans un fichier séparé
 * avec autoloading Composer. Ici, tout est regroupé pour la démonstration.
 */

// --- 1. Déclaration du namespace App\Models ---

namespace App\Models;

class Article
{
    private string $titre;
    private string $contenu;
    private string $section;

    public function __construct(string $titre, string $contenu, string $section)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->section = $section;
    }

    public function afficher(): string
    {
        return "Article : " . $this->titre . " [" . $this->section . "]";
    }

    public function getTitre(): string
    {
        return $this->titre;
    }
}

class Section
{
    private string $nom;
    private string $couleur;

    public function __construct(string $nom, string $couleur)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
    }

    public function afficher(): string
    {
        return "Section : " . $this->nom . " (" . $this->couleur . ")";
    }

    public function getNom(): string
    {
        return $this->nom;
    }
}

// --- 2. Utilisation depuis le namespace global ---
// En étant déjà dans App\Models, on accède directement aux classes.
// Dans un fichier externe, on utiliserait :
//   use App\Models\Article;
//   use App\Models\Section;

// --- 3. Démonstration ---

echo "=== Namespace App\\Models ===" . PHP_EOL . PHP_EOL;

// Créer une section
$section = new Section("Technologie", "#3498db");
echo $section->afficher() . PHP_EOL;

// Créer des articles
$article1 = new Article("Découvrir PHP 8", "Les nouveautés de PHP 8...", $section->getNom());
$article2 = new Article("Introduction aux namespaces", "Les namespaces organisent le code...", $section->getNom());

echo $article1->afficher() . PHP_EOL;
echo $article2->afficher() . PHP_EOL;

// --- 4. Nom complet (FQCN) ---

echo PHP_EOL . "=== Nom complet des classes (FQCN) ===" . PHP_EOL;
echo "Classe Article : " . Article::class . PHP_EOL;
echo "Classe Section : " . Section::class . PHP_EOL;


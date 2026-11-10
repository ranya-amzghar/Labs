<?php

/**
 * Lab PHP — Trait
 *
 * Cet exemple montre comment :
 * - Créer un trait pour partager du code entre classes.
 * - Utiliser un trait avec le mot-clé use dans une classe.
 * - Éviter la duplication de code sans héritage.
 */

// --- 1. Définition du trait Horodatable ---

trait Horodatable
{
    private string $creeLe;
    private string $modifieLe;

    public function horodater(): void
    {
        $maintenant = date('Y-m-d H:i:s');
        $this->creeLe = $maintenant;
        $this->modifieLe = $maintenant;
    }

    public function mettreAJour(): void
    {
        $this->modifieLe = date('Y-m-d H:i:s');
    }

    public function getCreeLe(): string
    {
        return $this->creeLe;
    }

    public function getModifieLe(): string
    {
        return $this->modifieLe;
    }

    public function afficherDates(): string
    {
        return "Créé le : " . $this->creeLe . " | Modifié le : " . $this->modifieLe;
    }
}

// --- 2. Trait AfficherMessage ---

trait AfficherMessage
{
    public function afficherMessage(string $action): string
    {
        return "Opération réussie : " . $action;
    }
}

// --- 3. Classe Article utilisant les deux traits ---

class Article
{
    use Horodatable;
    use AfficherMessage;

    private string $titre;
    private string $contenu;

    public function __construct(string $titre, string $contenu)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->horodater(); // Appel de la méthode du trait
    }

    public function afficher(): string
    {
        return "Article : " . $this->titre . " — " . $this->afficherDates();
    }
}

// --- 4. Classe Section utilisant le trait Horodatable ---

class Section
{
    use Horodatable;

    private string $nom;
    private string $couleur;

    public function __construct(string $nom, string $couleur)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->horodater();
    }

    public function afficher(): string
    {
        return "Section : " . $this->nom . " (" . $this->couleur . ") — " . $this->afficherDates();
    }
}

// --- 5. Démonstration ---

echo "=== Trait Horodatable ===" . PHP_EOL . PHP_EOL;

$article = new Article("Les nouveautés PHP 8", "Découvrez les fonctionnalités...");
echo $article->afficher() . PHP_EOL;

$section = new Section("Technologie", "#3498db");
echo $section->afficher() . PHP_EOL;

// Simuler une modification
echo PHP_EOL . "=== Mise à jour ===" . PHP_EOL;
sleep(1); // Attendre 1 seconde pour voir la différence
$article->mettreAJour();
echo "Après modification : " . $article->afficherDates() . PHP_EOL;

// Trait AfficherMessage
echo PHP_EOL . "=== Trait AfficherMessage ===" . PHP_EOL;
echo $article->afficherMessage("ajout d'un article") . PHP_EOL;


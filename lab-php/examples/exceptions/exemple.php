<?php

/**
 * Lab PHP — Gestion des erreurs et exceptions
 *
 * Cet exemple montre comment :
 * - Créer une exception personnalisée.
 * - Valider des données avec throw.
 * - Intercepter les erreurs avec try/catch.
 */

// --- 1. Exception personnalisée ---

class ValidationException extends Exception
{
    private string $champ;

    public function __construct(string $champ, string $message)
    {
        $this->champ = $champ;
        parent::__construct($message);
    }

    public function getChamp(): string
    {
        return $this->champ;
    }
}

// --- 2. Fonction de validation ---

function ajouterArticle(string $titre, string $contenu): string
{
    if (empty(trim($titre))) {
        throw new ValidationException('titre', "Le titre de l'article est obligatoire.");
    }

    if (strlen($contenu) < 10) {
        throw new ValidationException('contenu', "Le contenu doit contenir au moins 10 caractères.");
    }

    return "Article ajouté : " . $titre;
}

// --- 3. Tests ---

echo "=== Test 1 : Article valide ===" . PHP_EOL;
try {
    $resultat = ajouterArticle("Découvrir PHP", "PHP est un langage de programmation web très utilisé.");
    echo $resultat . PHP_EOL;
} catch (ValidationException $e) {
    echo "Erreur sur le champ '" . $e->getChamp() . "' : " . $e->getMessage() . PHP_EOL;
}

echo PHP_EOL . "=== Test 2 : Titre vide ===" . PHP_EOL;
try {
    $resultat = ajouterArticle("", "Un contenu valide ici.");
    echo $resultat . PHP_EOL;
} catch (ValidationException $e) {
    echo "Erreur sur le champ '" . $e->getChamp() . "' : " . $e->getMessage() . PHP_EOL;
}

echo PHP_EOL . "=== Test 3 : Contenu trop court ===" . PHP_EOL;
try {
    $resultat = ajouterArticle("Mon article", "Court");
    echo $resultat . PHP_EOL;
} catch (ValidationException $e) {
    echo "Erreur sur le champ '" . $e->getChamp() . "' : " . $e->getMessage() . PHP_EOL;
}

echo PHP_EOL . "=== Test 4 : Catch générique (Exception) ===" . PHP_EOL;
try {
    throw new Exception("Une erreur inattendue.");
} catch (ValidationException $e) {
    echo "Validation : " . $e->getMessage() . PHP_EOL;
} catch (Exception $e) {
    echo "Erreur générale : " . $e->getMessage() . PHP_EOL;
}


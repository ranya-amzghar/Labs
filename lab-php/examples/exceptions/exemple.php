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


// class ValidationException extends Exception
// {
//     private string $champ;

//     public function __construct(string $champ, string $message)
//     {
//         $this->champ = $champ;
//         parent::__construct($message);
//     }

//     public function getChamp(): string
//     {
//         return $this->champ;
//     }
// }

// // Fonction de validation
// function ajouterArticle(string $titre, string $contenu): string
// {
//     if (empty(trim($titre))) {
//         throw new ValidationException(
//             'titre',
//             "Le titre est obligatoire."
//         );
//     }

//     if (strlen(trim($contenu)) < 10) {
//         throw new ValidationException(
//             'contenu',
//             "Le contenu doit contenir au moins 10 caractères."
//         );
//     }

//     return "Article ajouté avec succès : " . $titre;
// }

// // Variables pour afficher les résultats
// $message = "";
// $erreur = "";
// $champErreur = "";

// $titre = "";
// $contenu = "";

// // Traitement du formulaire
// if ($_SERVER["REQUEST_METHOD"] === "POST") {

//     $titre = $_POST["titre"] ?? "";
//     $contenu = $_POST["contenu"] ?? "";

//     try {
//         $message = ajouterArticle($titre, $contenu);

//     } catch (ValidationException $e) {

//         $erreur = $e->getMessage();
//         $champErreur = $e->getChamp();

//     } catch (Exception $e) {

//         $erreur = "Une erreur inattendue est survenue.";
//     }
// }
// ?>

<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des articles</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        form {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            background: #2563eb;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<form method="POST">

    <h2>Ajouter un article</h2>

    <label for="titre">Titre :</label>

    <input
        type="text"
        id="titre"
        name="titre"
        value="<?= htmlspecialchars($titre) ?>"
    >

    <label for="contenu">Contenu :</label>

    <textarea
        id="contenu"
        name="contenu"
        rows="5"
    ><?= htmlspecialchars($contenu) ?></textarea>

    <button type="submit">Ajouter</button>

    <?php if ($message): ?>
        <p class="success">
            <?= htmlspecialchars($message) ?>
        </p>
    <?php endif; ?>

    <?php if ($erreur): ?>
        <p class="error">
            Erreur sur le champ
            <?= htmlspecialchars($champErreur) ?> :
            <?= htmlspecialchars($erreur) ?>
        </p>
    <?php endif; ?>

</form>

</body>
</html> -->

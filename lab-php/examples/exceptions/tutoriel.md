# Tutoriel — Gestion des erreurs et exceptions

## Objectif

Apprendre à détecter et traiter les erreurs en PHP avec le mécanisme `try` / `catch` / `throw` et les exceptions personnalisées.

## Fichier

`exemple.php` dans ce dossier.

## Explication du code

### 1. Exception personnalisée (`ValidationException`)

```php
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
```

- `ValidationException` **étend** la classe `Exception` de PHP.
- Elle ajoute une propriété `$champ` pour identifier quel champ a causé l'erreur.
- Le constructeur appelle `parent::__construct($message)` pour transmettre le message à la classe parente.
- La méthode `getChamp()` permet de récupérer le nom du champ en erreur.

### 2. Fonction de validation (`ajouterArticle`)

```php
function ajouterArticle(string $titre, string $contenu): string
{
    if (empty(trim($titre))) {
        throw new ValidationException('titre', "Le titre est obligatoire.");
    }

    if (strlen($contenu) < 10) {
        throw new ValidationException('contenu', "Le contenu doit contenir au moins 10 caractères.");
    }

    return "Article ajouté : " . $titre;
}
```

- La fonction reçoit un titre et un contenu.
- Si le titre est vide, elle **lance** (`throw`) une `ValidationException`.
- Si le contenu est trop court, elle lance une autre exception.
- Si tout est valide, elle retourne un message de succès.

### 3. Blocs try / catch

```php
try {
    $resultat = ajouterArticle("", "Un contenu valide ici.");
    echo $resultat;
} catch (ValidationException $e) {
    echo "Erreur sur le champ '" . $e->getChamp() . "' : " . $e->getMessage();
}
```

- `try` encadre le code qui peut produire une exception.
- `catch (ValidationException $e)` intercepte uniquement les `ValidationException`.
- `$e->getMessage()` récupère le message d'erreur.
- `$e->getChamp()` récupère le champ concerné.

### 4. Catch multiple

```php
try {
    throw new Exception("Une erreur inattendue.");
} catch (ValidationException $e) {
    echo "Validation : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur générale : " . $e->getMessage();
}
```

- PHP vérifie les blocs `catch` **dans l'ordre**.
- Le premier `catch` compatible est exécuté.
- Placer les exceptions les plus spécifiques en premier.

## Commande d'exécution

```bash
cd lab-php/examples/exceptions
php exemple.php
```

## Résultat attendu

```
=== Test 1 : Article valide ===
Article ajouté : Découvrir PHP

=== Test 2 : Titre vide ===
Erreur sur le champ 'titre' : Le titre de l'article est obligatoire.

=== Test 3 : Contenu trop court ===
Erreur sur le champ 'contenu' : Le contenu doit contenir au moins 10 caractères.

=== Test 4 : Catch générique (Exception) ===
Erreur générale : Une erreur inattendue.
```

## Exercice complémentaire

Créer une exception `ArticleIntrouvableException` qui prend un identifiant d'article. Écrire une fonction `trouverArticle(int $id)` qui lance cette exception si `$id` n'existe pas dans un tableau d'articles.


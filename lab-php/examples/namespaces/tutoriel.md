# Tutoriel — Namespace

## Objectif

Apprendre à organiser les classes PHP avec les namespaces pour éviter les conflits de noms et structurer le code.

## Fichier

`exemple.php` dans ce dossier.

## Explication du code

### 1. Déclaration du namespace

```php
namespace App\Models;
```

- Cette ligne déclare que toutes les classes de ce fichier appartiennent au namespace `App\Models`.
- Le namespace est comme un dossier virtuel pour les classes.
- Deux classes avec le même nom dans des namespaces différents ne sont pas en conflit.

### 2. Classe `Article`

```php
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
}
```

- La classe `Article` est définie dans `App\Models`.
- Son nom complet (FQCN) est `App\Models\Article`.
- Le constructeur initialise les propriétés privées avec les types déclarés.
- La méthode `afficher()` retourne une chaîne formatée.

### 3. Classe `Section`

```php
class Section
{
    private string $nom;
    private string $couleur;

    public function __construct(string $nom, string $couleur) { ... }
}
```

- La classe `Section` est aussi dans `App\Models`.
- Elle a son propre nom complet : `App\Models\Section`.
- Les deux classes coexistent dans le même namespace.

### 4. Utilisation avec `use`

Dans un fichier externe, on importerait les classes avec :

```php
use App\Models\Article;
use App\Models\Section;

$article = new Article("Mon article", "Contenu...", "Tech");
```

- `use` permet d'utiliser le nom court de la classe au lieu du FQCN.
- Sans `use`, il faudrait écrire `new \App\Models\Article(...)`.

### 5. FQCN (Fully Qualified Class Name)

```php
echo Article::class;  // Affiche : App\Models\Article
```

- `::class` retourne le nom complet de la classe, incluant son namespace.

## Commande d'exécution

```bash
cd lab-php/examples/namespaces
php exemple.php
```

## Résultat attendu

```
=== Namespace App\Models ===

Section : Technologie (#3498db)
Article : Découvrir PHP 8 [Technologie]
Article : Introduction aux namespaces [Technologie]

=== Nom complet des classes (FQCN) ===
Classe Article : App\Models\Article
Classe Section : App\Models\Section
```

## Lien avec le projet

Dans une application Laravel ou un projet PHP structuré, chaque classe est placée dans un namespace correspondant à son dossier :

- `app/Models/Article.php` → `namespace App\Models;`
- `app/Models/Section.php` → `namespace App\Models;`

L'autoloading de Composer charge automatiquement les classes en fonction de leur namespace.

## Exercice complémentaire

Créer un second namespace `App\Services` avec une classe `ArticleService` qui contient une méthode `listerArticles()`. Importer les classes `Article` et `ArticleService` dans un fichier principal avec `use`.


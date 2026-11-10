# Tutoriel — Namespace

## Objectif

Apprendre à organiser les classes PHP avec les namespaces pour éviter les conflits de noms et structurer le code.

## Fichier

`exemple.php` dans ce dossier.

## Explication du code

### 1. Déclarer plusieurs namespaces

```php
namespace App\Models {
    class Article { /* ... */ }
    class Section { /* ... */ }
}

namespace App\Blog {
    class Article { /* ... */ }
}
```

- Les blocs `namespace` placent les classes dans `App\Models` et `App\Blog`.
- Le namespace est comme un dossier virtuel pour les classes.
- Les deux classes `Article` coexistent car leurs noms complets sont différents.

### 2. Importer les classes avec `use`

```php
use App\Blog\Article as BlogArticle;
use App\Models\Article;
use App\Models\Section;

$section = new Section('Technologie');
$article = new Article('Découvrir PHP 8', $section->getName());
$articleDeBlog = new BlogArticle();
```

- `use` importe les classes dans le namespace global du script.
- `as BlogArticle` attribue un alias à la classe `Article` de `App\Blog`, afin de distinguer les deux classes portant ce nom.
- La section et l'article sont ensuite instanciés avec leurs noms courts.

### 3. Afficher le FQCN

```php
echo Article::class;     // App\Models\Article
echo BlogArticle::class; // App\Blog\Article
```

- `::class` retourne le nom complet de la classe, namespace compris.

## Commande d'exécution

Depuis la racine du dépôt :

```bash
php lab-php/pratique/namespaces/exemple.php
```

## Résultat attendu

```
=== Classes importées avec use ===

Section : Technologie
Article : Découvrir PHP 8 [Technologie]
Article de blog : présentation des namespaces PHP.

=== Noms complets des classes (FQCN) ===
Article : App\Models\Article
Article de blog : App\Blog\Article
Section : App\Models\Section
```

## Lien avec le projet

Dans une application Laravel ou un projet PHP structuré, chaque classe est placée dans un namespace correspondant à son dossier :

- `app/Models/Article.php` → `namespace App\Models;`
- `app/Models/Section.php` → `namespace App\Models;`

L'autoloading de Composer charge automatiquement les classes en fonction de leur namespace.

## Exercice complémentaire

Créer un second namespace `App\Services` avec une classe `ArticleService` qui contient une méthode `listerArticles()`. Importer les classes `Article` et `ArticleService` dans un fichier principal avec `use`.

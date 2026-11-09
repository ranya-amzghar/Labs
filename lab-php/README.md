# Lab PHP — Gestion des erreurs, Namespace et Trait

## Objectifs

Ce lab permet de découvrir trois notions fondamentales de PHP :

- **Gestion des erreurs et exceptions** — Détecter et traiter les erreurs avec `try`, `catch` et `throw`.
- **Namespace** — Organiser les classes pour éviter les conflits de noms.
- **Trait** — Partager du code commun entre plusieurs classes sans héritage.

## Stack technique

| Outil        | Rôle                              |
|--------------|-----------------------------------|
| **PHP 8.x**  | Langage de programmation          |
| **VS Code**  | Éditeur de code                   |
| **Terminal**  | Exécution des scripts PHP         |

## Quick Start

### Prérequis

- PHP 8.0 ou supérieur installé sur la machine.

Vérifier l'installation :

```bash
php -v
```

### Hello World

Créer un fichier `hello.php` :

```php
<?php

echo "Hello World depuis le Lab PHP !" . PHP_EOL;
```

Exécuter :

```bash
php hello.php
```

Résultat attendu :

```
Hello World depuis le Lab PHP !
```

## Contenu du lab

### 1. Gestion des erreurs et exceptions

PHP permet de détecter et de traiter les erreurs grâce au mécanisme d'exceptions :

- `try` — Encadrer le code susceptible de produire une erreur.
- `throw` — Signaler une exception.
- `catch` — Intercepter et traiter l'exception.

➜ Voir l'exemple : [`examples/exceptions/`](examples/exceptions/)

### 2. Namespace

Un namespace organise les classes PHP dans des espaces de noms distincts. Il évite les conflits lorsque deux classes portent le même nom.

- Déclaration avec `namespace App\Models;`
- Utilisation avec `use App\Models\Article;`

➜ Voir l'exemple : [`examples/namespaces/`](examples/namespaces/)

### 3. Trait

Un trait permet de partager des méthodes entre plusieurs classes sans utiliser l'héritage. Il résout le problème de la duplication de code.

- Déclaration avec `trait NomDuTrait { ... }`
- Utilisation avec `use NomDuTrait;` dans une classe.

➜ Voir l'exemple : [`examples/traits/`](examples/traits/)

## Structure du lab

```
lab-php/
├── README.md              ← Ce fichier
├── presentation.md        ← Présentation Marp
├── lab.md                 ← Présentation Marp (ancienne version)
├── logo_solicode.png
├── ofppt_logo.png
└── examples/
    ├── exceptions/
    │   ├── exemple.php    ← Exemple exécutable
    │   └── tutoriel.md    ← Explications détaillées
    ├── namespaces/
    │   ├── exemple.php
    │   └── tutoriel.md
    └── traits/
        ├── exemple.php
        └── tutoriel.md
```

## Exécution des exemples

Depuis le dossier `lab-php`, exécuter chaque exemple :

```bash
php examples/exceptions/exemple.php
php examples/namespaces/exemple.php
php examples/traits/exemple.php
```


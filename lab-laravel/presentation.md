---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  :root {
    --bg: #0B1628;
    --surface: #16263D;
    --card: #20334D;
    --accent: #38BDF8;
    --accent-hover: #0EA5E9;
    --light: #BAE6FD;
    --text: #E2E8F0;
    --white: #FFFFFF;
    --muted: #8293A8;
    --border: #2B4365;
  }

  section {
    background: var(--bg);
    color: var(--text);
    font-family: 'Segoe UI', Arial, sans-serif;
    padding: 35px 55px;
    font-size: 25px;
    border-top: 4px solid var(--accent);
  }

  h1, h2, h3 {
    color: var(--white);
  }

  h1 {
    color: var(--accent);
    font-size: 42px;
    margin: 0 0 14px 0;
    font-weight: 700;
  }

  h2 {
    font-size: 29px;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 6px;
    margin: 12px 0 10px 0;
  }

  h3 {
    color: var(--accent);
    font-size: 24px;
    margin: 10px 0 6px 0;
  }

  p {
    line-height: 1.45;
    margin: 6px 0;
  }

  ul, ol {
    line-height: 1.45;
    margin: 6px 0 10px 0;
    padding-left: 24px;
  }

  li {
    margin-bottom: 6px;
  }

  li::marker {
    color: var(--accent);
  }

  strong {
    color: var(--light);
  }

  code {
    background: var(--surface);
    color: var(--light);
    padding: 3px 8px;
    border-radius: 5px;
    font-size: 0.9em;
  }

  pre {
    background: #070D18 !important;
    border: 1px solid var(--border);
    border-left: 4px solid var(--accent);
    border-radius: 8px;
    padding: 14px 18px;
    margin: 10px 0;
  }

  pre code {
    background: none !important;
    color: #F8FAFC !important;
    font-size: 20px;
    line-height: 1.4;
  }

  pre code span, pre code * {
    color: #F8FAFC !important;
  }

  blockquote {
    background: var(--surface);
    border-left: 4px solid var(--accent);
    padding: 10px 16px;
    color: var(--light);
    border-radius: 0 6px 6px 0;
    margin: 10px 0;
  }

  table {
    display: table !important;
    width: 100% !important;
    border-collapse: collapse !important;
    margin: 16px 0 !important;
    background: var(--surface) !important;
    border: 1px solid var(--border) !important;
    border-radius: 8px !important;
    overflow: hidden !important;
  }

  th {
    background: #1E3A5F !important;
    color: var(--accent) !important;
    padding: 12px 18px !important;
    border: 1px solid var(--border) !important;
    text-align: left !important;
    font-weight: 700 !important;
    font-size: 23px !important;
    letter-spacing: 0.5px !important;
  }

  td {
    background: var(--surface) !important;
    color: var(--text) !important;
    padding: 10px 18px !important;
    border: 1px solid var(--border) !important;
    font-size: 22px !important;
    line-height: 1.45 !important;
  }

  tr:nth-child(even) td {
    background: var(--card) !important;
  }

  td code {
    background: #070D18 !important;
    color: var(--accent) !important;
    border: 1px solid var(--border) !important;
    padding: 3px 8px !important;
    border-radius: 4px !important;
    font-size: 19px !important;
    font-family: 'Consolas', 'Courier New', monospace !important;
  }

  /* Cover slide */

  section.cover,
  section[data-marpit-pagination="1"] {
    text-align: left !important;
    background: linear-gradient(145deg, #070D18 0%, #0B1628 50%, #16263D 100%) !important;
    padding: 55px 75px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    align-items: flex-start !important;
    border-top: 5px solid var(--accent);
  }

  section.cover p:first-of-type,
  section[data-marpit-pagination="1"] p:first-of-type {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    width: 100% !important;
    margin: 0 0 35px 0 !important;
  }

  section.cover img,
  section[data-marpit-pagination="1"] img {
    height: 85px !important;
    width: auto !important;
    object-fit: contain !important;
    margin: 0 !important;
    padding: 0 !important;
  }

  section.cover img[alt*="Solicode"],
  section[data-marpit-pagination="1"] img[alt*="Solicode"] {
    height: 105px !important;
  }

  section.cover img[alt*="OFPPT"],
  section[data-marpit-pagination="1"] img[alt*="OFPPT"],
  section.cover img[alt*="Ofppt"],
  section[data-marpit-pagination="1"] img[alt*="Ofppt"] {
    background: #FFFFFF !important;
    padding: 6px 14px !important;
    border-radius: 8px !important;
  }

  section.cover h1,
  section[data-marpit-pagination="1"] h1 {
    font-size: 54px !important;
    color: var(--white) !important;
    text-align: left !important;
    margin: 25px 0 15px 0 !important;
    font-weight: 700 !important;
    letter-spacing: -1px !important;
  }

  section.cover p:not(:first-of-type),
  section[data-marpit-pagination="1"] p:not(:first-of-type) {
    color: var(--text) !important;
    font-size: 26px !important;
    line-height: 1.8 !important;
    text-align: left !important;
    margin: 6px 0 !important;
  }

  section.cover p:not(:first-of-type) strong,
  section[data-marpit-pagination="1"] p:not(:first-of-type) strong {
    color: var(--accent) !important;
  }

  section.cover::after,
  section[data-marpit-pagination="1"]::after {
    display: none !important;
  }

  section.lead {
    text-align: center;
  }

---

<!-- _class: cover -->
<!-- _paginate: false -->

![Solicode](logo_solicode.png) ![OFPPT](ofppt_logo.png)

# LAB LARAVEL

**Découvrir le framework Laravel**

**Réalisé par :** Ranya Amzghar

**Encadré par :** Essarraj Fouad

<!-- Je vais vous présenter Laravel et les bases de son fonctionnement. -->

---

# Plan

1. Stack technique
2. Définitions
3. Problème et besoin
4. Solution et pratique
5. Résultats et conclusion

<!-- Voici les différentes parties de ce Lab. -->

---

# Stack technique

| Outil / Technologie | Rôle principal | Utilité dans le Lab |
|---|---|---|
| **Laravel** | Framework applicatif web en PHP | Fournit l'architecture MVC, le système de routage et l'ORM pour structurer l'application. |
| **Composer** | Gestionnaire de dépendances pour PHP | Télécharge, installe et configure automatiquement Laravel ainsi que l'ensemble de ses paquets requis. |

<!-- Notre stack technique repose sur le duo indissociable Laravel et Composer. -->

---

# Définitions

## Laravel

Laravel est un framework PHP.

## Composer

Composer est un outil PHP qui permet d'installer et de gérer les bibliothèques nécessaires à un projet.

---

# Problème et besoin

## Problème

- Le code PHP peut être difficile à organiser.
- La gestion des pages demande plusieurs étapes.
- Le développement peut prendre beaucoup de temps.

## Besoin

- Organiser le code.
- Créer des pages web facilement.
- Gérer les données.
- Simplifier le développement.

<!-- Laravel répond au besoin d'organiser le code et de simplifier le développement web. -->
---

# Solution et pratique

## 01 — Créer un projet Laravel

Dans le terminal, exécuter :

```bash
composer create-project laravel/laravel mon-projet
```

Entrer dans le projet :

```bash
cd mon-projet
```

Lancer le serveur :

```bash
php artisan serve
```

<!-- Cette étape permet de créer un projet Laravel et de lancer le serveur de développement. -->

---

## 02 — Découvrir les routes

Les routes définissent les adresses de l'application.

Exemple dans `routes/web.php` :

```php
Route::get('/bonjour', function () {
    return 'Bonjour Laravel';
});
```

<!-- Les routes permettent de définir les pages accessibles dans une application Laravel. -->
---

## 03 — Découvrir MVC

Laravel utilise une organisation appelée **MVC**.

| Élément | Rôle |
|---|---|
| Model | Gérer les données |
| View | Afficher les informations |
| Controller | Organiser les traitements |

Cette organisation sépare les différentes responsabilités de l'application.

<!-- MVC permet de séparer les données, les traitements et l'affichage. -->
---

## 04 — Découvrir les migrations

Les migrations permettent de créer et modifier les tables de la base de données.

Créer une migration :

```bash
php artisan make:migration create_categories_table
```

Exécuter les migrations :

```bash
php artisan migrate
```

<!-- Les migrations permettent de gérer la structure de la base de données avec Laravel. -->
---

## 05. Eloquent ORM

**Définition :** Eloquent est un mapper objet-relationnel qui permet d'interagir avec les tables de la base de données en manipulant des objets PHP intuitifs.

**Exemple :**
```php
// Insertion d'un nouvel enregistrement via le Modèle Eloquent
$produit = Produit::create([
    'nom'  => 'Clavier mécanique',
    'prix' => 250.00
]);

// Récupération filtrée sans SQL manuel
$produits = Produit::where('prix', '<=', 300)->get();
```
<!-- Eloquent ORM est l'ORM intégré à Laravel qui permet d'interagir avec la base de données en utilisant des modèles PHP, sans écrire directement des requêtes SQL. -->
<!-- Eloquent simplifie les opérations de base de données grâce à une syntaxe expressive. -->
---

## 06.Commandes Laravel

| Commande | Rôle |
|---|---|
| `composer create-project laravel/laravel mon-projet` | Créer un projet Laravel |
| `cd mon-projet` | Entrer dans le projet |
| `php artisan serve` | Lancer le serveur |
| `php artisan make:controller CategoryController` | Créer un controller |
| `php artisan make:model Category` | Créer un model |
| `php artisan migrate` | Exécuter les migrations |

<!-- Cette partie présente les commandes principales pour commencer avec Laravel. -->

---

# Résultats et conclusion

## Résultats attendus

- Comprendre le rôle de Laravel.
- Créer une route.
- Comprendre MVC.
- Découvrir les migrations.

## Conclusion

Laravel facilite le développement web avec PHP grâce à une organisation claire et des outils intégrés.

<!-- Dans cette partie, nous allons découvrir les résultats obtenus et conclure ce Lab. -->

---

<!-- _class: lead -->

# Merci pour votre attention !

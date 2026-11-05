---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  :root {
    --bg: #0B1628;
    --surface: #13243A;
    --card: #192D46;
    --accent: #38BDF8;
    --text: #E2E8F0;
    --white: #FFFFFF;
    --muted: #94A3B8;
  }

  section {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: var(--bg);
    color: var(--text);
    font-size: 23px;
    padding: 65px 85px;
    border-top: 4px solid var(--accent);
    justify-content: center;
  }

  h1 {
    color: var(--white);
    font-size: 2em;
    font-weight: 750;
    letter-spacing: -1px;
    margin-bottom: 0.8em;
  }

  h2 {
    color: var(--white);
    font-size: 1.4em;
    border: none;
    border-left: 4px solid var(--accent);
    padding-left: 15px;
    margin-bottom: 0.7em;
  }

  h3 {
    color: var(--accent);
    font-size: 1.05em;
  }

  p {
    line-height: 1.5;
  }

  strong {
    color: var(--accent);
  }

  ul, ol {
    line-height: 1.8;
    padding-left: 1.2em;
  }

  li::marker {
    color: var(--accent);
  }

  section table {
    display: table;
    width: 100% !important;
    max-width: 100% !important;
    table-layout: fixed;
    border-collapse: collapse;
    font-size: 0.85em;
    background: var(--surface);
    border-radius: 10px;
    overflow: hidden;
    margin: 20px 0;
  }

  section th, section td {
    width: 50%;
    box-sizing: border-box;
    color: #1E293B;
  }

  th {
    background: var(--card);
    color: #FFFFFF !important;
    font-weight: 700;
    text-align: left;
    padding: 15px 18px;
  }

  td {
    background: #E2E8F0;
    color: #1E293B !important;
    padding: 13px 18px;
    border-bottom: 1px solid #CBD5E1;
  }

  tr:last-child td {
    border-bottom: none;
  }

  code {
    background: var(--surface);
    color: var(--accent);
    padding: 3px 7px;
    border-radius: 5px;
  }

  pre {
    background: var(--surface);
    border: 1px solid #293D55;
    border-left: 4px solid var(--accent);
    border-radius: 9px;
    padding: 18px;
  }

  blockquote {
    background: var(--surface);
    border-left: 4px solid var(--accent);
    padding: 15px 22px;
    color: var(--muted);
  }

  section::after {
    color: var(--muted);
    font-size: 13px;
    font-weight: 600;
  }

  section[data-marpit-pagination="1"] {
    background: #0B1628;
    text-align: left;
    padding: 50px 75px;
    border-top: 5px solid #38BDF8;
  }

  section[data-marpit-pagination="1"] p:first-of-type {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin: 0;
  }

  section[data-marpit-pagination="1"] img {
    height: 90px;
    width: auto;
    object-fit: contain;
    margin: 0;
    padding: 10px 20px;
    border-radius: 8px;
  }

  section[data-marpit-pagination="1"] h1 {
    color: var(--white);
    font-size: 2.8em;
    letter-spacing: -1.5px;
    margin: 1.5em 0 0.5em;
  }

  section[data-marpit-pagination="1"] p:not(:first-of-type) {
    color: #c6c5ca;
    font-size: 28px;
    line-height: 1.9;
  }

  section[data-marpit-pagination="1"]::after {
    display: none;
  }

  section[data-marpit-pagination="2"] ul {
    list-style: none;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
  }

  section[data-marpit-pagination="2"] li {
    background: var(--surface);
    border-left: 3px solid var(--accent);
    border-radius: 7px;
    padding: 13px 18px;
  }

---

<!-- _class: lead -->

![Solicode](logo_solicode.png) ![OFPPT](ofppt_logo.png)

# LAB LARAVEL

**Découvrir le framework Laravel**

**Réalisé par :** Ranya Amzghar

**Encadré par :** Essarraj Fouad

<!-- Je vais vous présenter Laravel et les bases de son fonctionnement. -->

---

# Plan

1. Introduction
2. Stack technique
3. Définitions
4. Problème et besoin
5. Solution et pratique
6. Résultats et conclusion

<!-- Voici les différentes parties de ce Lab. -->

---

# 1. Introduction

Laravel est un framework PHP utilisé pour développer des applications web.

Il permet d'organiser le code et de faciliter le développement.

**Objectifs :**

- Découvrir Laravel.
- Comprendre son organisation.
- Créer une première application web.

<!-- Cette partie présente Laravel et les objectifs de ce Lab. -->

---

# 2. Stack technique

| Outil | Rôle |
|---|---|
| PHP | Langage de programmation |
| Laravel | Framework web |
| Composer | Gestion des dépendances PHP |
| MySQL | Base de données |
| Visual Studio Code | Éditeur de code |

<!-- Cette partie présente les outils nécessaires pour travailler avec Laravel. -->

---

# 3. Définitions

- **Framework :** ensemble d'outils qui facilite le développement.
- **Route :** adresse qui permet d'accéder à une page.
- **Controller :** classe qui organise le traitement d'une demande.
- **Model :** classe qui représente et gère les données.
- **View :** partie qui affiche les informations à l'utilisateur.
- **Migration :** fichier qui permet de créer ou modifier la structure de la base de données.

<!-- Cette partie explique les concepts importants de Laravel. -->

---

# 4. Problème et besoin

## Problème

- Le code PHP peut devenir difficile à organiser.
- Les pages et les traitements peuvent être mélangés.
- La gestion de la base de données demande plusieurs étapes.

## Besoin

- Organiser le code.
- Séparer les responsabilités.
- Faciliter la gestion des données.
- Développer une application plus facilement.

<!-- Laravel répond au besoin d'organiser et de simplifier le développement web. -->

---

# 5. Solution et pratique

## Découvrir Laravel

1. Installer PHP et Composer.
2. Créer un projet Laravel.
3. Découvrir les dossiers du projet.
4. Créer une route.
5. Afficher une page.
6. Découvrir les migrations.

<!-- Cette partie présente les principales étapes pour commencer avec Laravel. -->

---

# 5. Solution et pratique

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

# 5. Solution et pratique

## 02 — Découvrir les routes

Les routes définissent les adresses de l'application.

Exemple dans `routes/web.php` :

```php
Route::get('/bonjour', function () {
    return 'Bonjour Laravel';
});
```

Cette route affiche un message lorsque l'utilisateur ouvre `/bonjour`.

<!-- Les routes permettent de définir les pages accessibles dans une application Laravel. -->

---

# 5. Solution et pratique

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

# 5. Solution et pratique

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

# 6. Résultats et conclusion

## Résultats attendus

- Comprendre le rôle de Laravel.
- Découvrir la structure d'un projet.
- Créer une route.
- Comprendre MVC.
- Découvrir les migrations.

## Conclusion

Laravel facilite le développement web avec PHP grâce à une organisation claire et des outils intégrés.

<!-- Dans cette partie, nous allons découvrir les résultats obtenus et conclure ce Lab. -->

---

<!-- _class: lead -->

# Merci pour votre attention !

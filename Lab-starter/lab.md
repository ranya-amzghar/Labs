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

    
    /* Table */

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

    section th,
    section td {
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

    /* Cover slide — original layout preserved */

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

    /* Plan slide */

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

    /* Definitions slide */

    section[data-marpit-pagination="4"] ul {
    list-style: none;
    padding: 0;
    }

    section[data-marpit-pagination="4"] li {
    background: var(--surface);
    margin: 10px 0;
    padding: 10px 18px;
    border-radius: 7px;
    }
---

<!-- _class: lead -->
![Solicode](logo_solicode.png) ![Ofppt](ofppt_logo.png)
# LAB STARTER

**Configuration de l'environnement de développement**

**Réalisée par :** Ranya Amzghar
**Encadrée par :** Essarraj Fouad

<!-- Je vais vous présenter le Lab Starter et la préparation de mon environnement de travail. -->
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

Le Lab Starter permet de préparer un ordinateur pour le développement web.

**Objectifs :**

- Configurer Windows.
- Installer les extensions utiles.
- Préparer un environnement de travail.

<!-- Ce Lab permet de préparer notre ordinateur pour programmer. -->
---

# 2. Stack

| Outil | Rôle |
|---|---|
| Windows | Système d'exploitation |
| Visual Studio Code | Éditeur de code |
| Git | Gestion des versions du code |
| Live Server | Lancer un site web localement |
| Marp for VS Code | Créer des présentations |
| Todo Highlight | Repérer les tâches dans le code |
| Markdownlint | Vérifier les fichiers Markdown |

<!-- Cette partie présente les outils utilisés pour préparer notre environnement. -->
---

# 3. Définitions

- **IDE :** Environnement pour écrire et organiser le code.
- **Extension :** Outil qui ajoute une fonction à VS Code.
- **Git :** Outil pour suivre les modifications du code.
- **Terminal :** Espace pour écrire et exécuter des commandes.
- **Serveur local :** Serveur qui permet de tester un site sur son ordinateur.
- **Markdown :** Langage simple pour écrire des documents.

<!-- Cette partie explique les mots importants de ce Lab. -->
---
# 4. Problème et besoin

## Problèmes rencontrés

- Le projet n'était pas initialisé avec Git.
- Les fichiers cachés comme `.gitignore` et `.env` n'étaient pas visibles.
- Les extensions des fichiers n'étaient pas affichées.
- Les tâches TODO étaient difficiles à retrouver.
- Les pages HTML devaient être actualisées manuellement.

## Besoin

Préparer un environnement organisé pour faciliter le développement web.

<!-- Cette partie présente les difficultés rencontrées et les besoins identifiés. -->

---

# 5. Solution et pratique

## Solutions proposées

| Problème | Solution |
|---|---|
| Projet non initialisé | Initialiser Git |
| Fichiers cachés | Afficher les éléments masqués |
| Extensions invisibles | Afficher les extensions |
| TODO difficiles à retrouver | Better Todo Tree |
| Actualisation manuelle | Live Server |

<!-- Voici les solutions utilisées pour répondre aux problèmes rencontrés. -->

---

# 5. Solution et pratique

## 01 — Initialiser Git

1. Ouvrir le projet dans VS Code.
2. Ouvrir **Source Control** avec `Ctrl + Shift + G`.
3. Cliquer sur **Initialize Repository**.

**Alternative dans le terminal :**

```bash
git init
```

<!-- Cette étape permet de commencer à suivre les modifications du projet avec Git. -->

---

# 5. Solution et pratique

## 02 — Afficher les fichiers cachés

1. Ouvrir l'Explorateur de fichiers avec `Win + E`.
2. Cliquer sur **Affichage**.
3. Choisir **Afficher**.
4. Activer **Éléments masqués**.

## 03 — Afficher les extensions

1. Ouvrir **Affichage → Afficher**.
2. Activer **Extensions de noms de fichiers**.
3. Vérifier le nom complet des fichiers, comme `README.md`.

<!-- Ces réglages permettent de voir les fichiers cachés et leurs extensions. -->

---

# 5. Solution et pratique

## 04 — Installer Better Todo Tree

**Rôle :** rechercher et regrouper les commentaires TODO et FIXME dans le projet.

1. Ouvrir les extensions avec `Ctrl + Shift + X`.
2. Rechercher **Better Todo Tree**.
3. Installer l'extension.
4. Ajouter des commentaires dans le code :

```js
// TODO: ajouter la validation
// FIXME: corriger cette erreur
```

5. Ouvrir Better Todo Tree dans la barre latérale.

<!-- Better Todo Tree permet de retrouver facilement les tâches et les problèmes dans le code. -->
---

# 5. Solution et pratique

## 05 — Installer Live Server

1. Ouvrir les extensions avec `Ctrl + Shift + X`.
2. Rechercher **Live Server**.
3. Installer l'extension.
4. Ouvrir le projet contenant `index.html`.
5. Cliquer sur **Go Live**.

La page s'ouvre dans le navigateur et s'actualise après l'enregistrement des modifications.

> Live Server prévisualise les pages HTML statiques. Il n'exécute pas le code PHP.

<!-- Live Server permet de prévisualiser les pages HTML et de voir les modifications automatiquement. -->
---

# 6. Résultats et conclusion

## Résultats

- Git permet de suivre les modifications du projet.
- Les fichiers cachés sont visibles.
- Les extensions de fichiers sont affichées.
- Les tâches TODO sont regroupées.
- Les pages HTML sont prévisualisées avec Live Server.

## Conclusion

Ce Lab nous a permis de mieux organiser notre environnement de développement et de découvrir des outils utiles pour travailler efficacement.

<!-- Dans cette partie, nous allons découvrir les résultats obtenus. -->
---
<!-- _class: lead -->
# Merci pour votre attention !
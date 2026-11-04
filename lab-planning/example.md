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

# Application de news
Une plateforme web pour consulter et gérer les actualités.

**Réalisée par :** Ranya Amzghar
**Encadrée par :** Essarraj Fouad

<!--
Bonjour. Aujourd'hui, je présente mon projet technique.
-->

---

# 1. Plan

1. Stack technique
2. Définitions
3. Problème et besoin
4. Solution et pratique
5. Résultats et conclusion

<!--
Voici le plan de ma présentation.
-->

---

# 2. Stack technique

| Technologie | Rôle |
|---|---|
| HTML | Créer la structure des pages |
| CSS | Ajouter le style |
| JavaScript | Ajouter des interactions |
| PHP | Gérer les données côté serveur |
| MySQL | Stocker les données |

<!--
Ici, ce sont les technologies de mon application.
-->

---

# 3. Définitions

- **News :** Une information sur un événement.
- **Article :** Un texte qui présente une information.
- **Auteur :** Une personne qui écrit un article.
- **Section :** Un groupe d'articles sur le même sujet.
- **CRUD :** Ajouter, afficher, modifier et supprimer des données.

<!--
Voici les mots importants pour comprendre mon projet.
-->

---

# 4. Problème et besoin

## Problème

- Les informations sont parfois difficiles à organiser.
- Les articles ont besoin d'une bonne gestion.
- Les utilisateurs ont besoin d'un accès simple aux actualités.

## Besoin

- Afficher les articles.
- Organiser les sections.
- CRUD.

<!--
Cette partie présente le problème et les besoins auxquels mon application répond.
-->

---

# 5. Solution et pratique

## Solution

Une application web pour afficher et gérer les articles.

## Partie pratique

1. Création de la base de données.
2. Création des tables.
3. Développement des pages.
4. Ajout des interactions.
5. Gestion des données.
6. Tests CRUD.

<!--
Cette partie explique la solution choisie et les étapes de réalisation.
-->

---

# 6. Fonctionnalités et tests

## Fonctionnalités

- Ajouter un article et une section.
- Afficher les articles et les sections.

## Tests

- Tester l'ajout d'un article et d'un section.
- Vérifier l'affichage des articles et sections.

<!--
Cette partie présente les fonctionnalités de l'application et les tests réalisés.
-->

---

# 7. Résultats et conclusion

## Résultats

- Une application web de news.
- Une gestion des articles.
- Une organisation des sections.

## Conclusion

- Gestion des données.
- Fonctionnalités CRUD.

<!--
Cette partie présente les résultats obtenus et de mon projet.
-->

---

<!-- _class: lead -->

# Merci pour votre attention !
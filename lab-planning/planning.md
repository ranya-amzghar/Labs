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

# Plan générique de présentation d'un Lab

**Guide de préparation et de présentation**
<!-- Bonjour, je vais vous présenter le plan de présentation d'un Lab. -->
---

# 1. Introduction

Ce document présente un plan générique pour préparer et présenter un Lab technique.

**Objectifs :**
- Organiser les informations.
- Expliquer les notions importantes.
- Présenter le travail réalisé.

Ce plan peut être adapté selon le sujet et les objectifs de chaque Lab.

<!-- Ce document nous aide à préparer une présentation claire. -->

---

# 2. Plan de présentation

La présentation d'un Lab est organisée en **7 slides** :

1. Page de garde
2. Plan
3. Stack technique
4. Définitions
5. Problème et besoin
6. Solution et pratique
7. Résultats et conclusion

<!-- Voici les sept parties à suivre pour présenter un Lab. -->

---

# 3. Contenu de chaque partie

## Slide 1 — Page de garde

**Objectif :** Présenter les informations générales du Lab.

**Contenu :**
- Titre du Lab.
- Nom et prénom de l'apprenant.
- Nom de l'encadrant.

<!-- Nous allons voir les informations à présenter dans une page de garde. -->
---
## Slide 2 — Plan

**Objectif :** Présenter les différentes parties de la présentation.

**Contenu :**
- Introduction.
- Stack technique.
- Définitions.
- Problème et besoin.
- Solution et pratique.
- Résultats et conclusion.

<!-- Le plan montre les différentes parties à présenter.  -->

---

# 4. Contenu de chaque partie

## Slide 3 — Stack technique

**Objectif :** Présenter les technologies et les outils utilisés.

**Contenu :**
- Nom des technologies et des outils.
- Rôle de chaque technologie ou outil.
- Utilité dans le Lab.
<!-- La stack technique présente les outils utilisés et leur rôle. -->
---
## Slide 4 — Définitions

**Objectif :** Expliquer les notions importantes liées au sujet.

**Contenu :**
- Définitions des termes techniques.
- Explication des concepts importants.
- Notions nécessaires pour comprendre le Lab.

<!-- Les définitions expliquent les mots importants du sujet. -->
---

# 5. Contenu de chaque partie

## Slide 5 — Problème et besoin

**Objectif :** Présenter le problème et expliquer l'utilité du Lab.

**Contenu :**
- Description du problème.
- Identification du besoin.
- Importance du Lab.
- Objectif à atteindre.

<!-- Le problème montre pourquoi ce Lab est nécessaire. -->
---

# 6. Contenu de chaque partie

## Slide 6 — Solution et pratique

**Objectif :** Présenter le travail réalisé et les étapes de la pratique.

**Contenu :**
- Présentation de la solution.
- Étapes de réalisation.
- Présentation des exemples.
- Réalisation des tests.
- Captures d'écran si nécessaire.

<!-- La solution présente les étapes pour réaliser le travail. -->

---

# 7. Résultats et conclusion

## Slide 7 — Résultats et conclusion

**Objectif :** Présenter le résultat final et résumer les apprentissages.

**Contenu :**
- Résultat obtenu.
- Vérification des objectifs.
- Difficultés rencontrées.
- Compétences acquises.
- Conclusion générale.
<!-- Les résultats montrent le travail réalisé.-->
---

# Adaptation du plan

Ce plan est générique et peut être adapté selon le sujet du Lab.

- Certaines parties peuvent être développées davantage.
- D'autres peuvent être simplifiées selon le travail demandé.
- La présentation doit rester claire et organisée.
<!-- Le plan peut être adapté selon le sujet et le travail demandé. -->
---

# Conclusion

Ce plan permet de structurer la présentation d'un Lab technique de manière simple et cohérente.

Il aide à :
- Présenter le sujet.
- Expliquer les notions importantes.
- Décrire la pratique.
- Montrer les résultats obtenus.
<!-- Ce plan nous aide à présenter un Lab de façon simple -->
---

<!-- _class: lead -->

# Merci pour votre attention !
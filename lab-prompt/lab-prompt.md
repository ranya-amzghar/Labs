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

# LAB PROMPT

**Les bases du Prompt Engineering**

**Réalisée par :** Ranya Amzghar

**Encadrée par :** Essarraj Fouad

<!-- Je vais vous présenter les bases du Prompt Engineering et les méthodes pour écrire de bons prompts. -->

---

# Plan

1. Introduction
2. Stack 
3. Définitions
4. Problème et besoin
5. Solution et pratique
6. Résultats et conclusion

<!-- Voici les différentes parties de ce Lab. -->

---

# 1. Introduction

Un prompt est une demande écrite à une intelligence artificielle.

**Objectifs :**

- Apprendre à écrire des prompts clairs.
- Découvrir plusieurs méthodes.
- Améliorer les réponses de l'IA.

**Exemple :**

« Explique Laravel à un débutant. Utilise des mots simples et donne un exemple. »

<!-- Cette partie présente le Prompt Engineering et ses objectifs. -->

---

# 2. Stack

| Outil | Rôle |
|---|---|
| ChatGPT | Répondre aux prompts |
| Microsoft Copilot | Aider à apprendre et programmer |
| Prompt | Donner une instruction à l'IA |

<!-- Cette partie présente les outils utilisés pour pratiquer le Prompt Engineering. -->

---

# 3. Définitions

- **Prompt :** demande écrite envoyée à une IA.
- **Prompt Engineering :** méthode pour construire et améliorer les prompts.
- **Input :** informations données à l'IA.
- **Output :** résultat attendu.
- **Few-Shot :** méthode qui utilise des exemples pour guider l'IA.

<!-- Cette partie explique les mots importants du Prompt Engineering. -->

---

# 4. Problème et besoin

## Problème

- Les demandes peuvent être trop courtes.
- Le contexte peut être insuffisant.
- Les réponses peuvent être trop générales.
- Le résultat ne correspond pas toujours au besoin.

## Besoin

- Écrire des demandes claires.
- Donner des informations utiles.
- Préciser le résultat attendu.
- Vérifier les réponses.

<!-- Un prompt clair aide l'IA à mieux comprendre notre besoin. -->

---

# 5. Solution et pratique

## Les méthodes de Prompt Engineering

| Méthode | Objectif |
|---|---|
| RTF | Écrire un prompt simple |
| IPO | Organiser les informations |
| CRISPE | Ajouter des détails |
| Few-Shot | Donner des exemples |
| Test | Améliorer la réponse |

<!-- Ces méthodes permettent de construire des prompts adaptés à différentes demandes. -->

---

# 5. Solution et pratique

## 01 — La méthode RTF

RTF contient trois éléments :

- **R — Rôle :** qui est l'IA ?
- **T — Tâche :** que doit-elle faire ?
- **F — Format :** comment présenter la réponse ?

**Exemple :**

« Tu es un formateur Laravel. Explique les migrations à un débutant. Utilise cinq étapes et un exemple de code. »

<!-- RTF permet de préciser le rôle, la tâche et le format de la réponse. -->

---

# 5. Solution et pratique

## 02 — La méthode IPO

IPO organise le prompt en trois parties :

- **Input :** les informations données.
- **Process :** le travail à réaliser.
- **Output :** le résultat attendu.

**Exemple :**

- Input : Je connais PHP, mais je débute avec Laravel.
- Process : Explique les migrations et les étapes pour créer une table.
- Output : Donne une explication simple avec un exemple de code.

<!-- IPO permet d'organiser les informations, le travail et le résultat attendu. -->

---

# 5. Solution et pratique

## 03 — La méthode CRISPE

CRISPE permet de donner plus de détails à l'IA.

- **C — Capacity :** compétence attendue.
- **R — Role :** rôle de l'IA.
- **I — Insight :** contexte.
- **S — Statement :** instruction.
- **P — Personality :** style de réponse.
- **E — Experiment :** variantes ou exemples.

<!-- CRISPE permet de préciser le contexte et les attentes du prompt. -->

---

# 5. Solution et pratique

## 04 — Few-Shot Prompting

Few-Shot consiste à donner un ou plusieurs exemples à l'IA avant une nouvelle demande.

**Exemple :**

« Voici un exemple de description de tâche. Écris une nouvelle description avec la même organisation et le même style. »

**Objectif :** aider l'IA à comprendre le résultat souhaité.

<!-- Few-Shot utilise des exemples pour guider la réponse de l'intelligence artificielle. -->

---

# 5. Solution et pratique

## 05 — Tester et améliorer un prompt

1. **Écrire :** préparer le prompt.
2. **Tester :** envoyer la demande.
3. **Lire :** analyser la réponse.
4. **Corriger :** ajouter des précisions.
5. **Tester encore :** vérifier le nouveau résultat.

**Exemple :**

« Explique avec des mots plus simples et donne un exemple facile. »

<!-- Cette partie montre comment tester et améliorer un prompt. -->

---

# 5. Solution et pratique

## 06 — Utiliser l'IA au quotidien

### Pour apprendre
- Expliquer une notion.
- Comprendre un cours.
- Résumer un document.

### Pour écrire
- Corriger un texte.
- Améliorer une description.

### Pour programmer
- Expliquer un code.
- Comprendre une erreur.
- Préparer un exercice.

<!-- Cette partie présente les utilisations de l'IA dans le travail quotidien. -->

---

# 6. Résultats et conclusion

## Résultats

- Les prompts sont plus clairs.
- Les demandes sont mieux organisées.
- Les réponses correspondent davantage au besoin.
- Les résultats peuvent être améliorés avec des tests.

## Conclusion

Le Prompt Engineering aide à mieux utiliser l'IA grâce à des demandes claires et bien structurées.

**À retenir :** écrire, tester, vérifier et améliorer.

<!-- Dans cette partie, nous allons découvrir les résultats obtenus et conclure ce Lab. -->

---

<!-- _class: lead -->

# Merci pour votre attention !
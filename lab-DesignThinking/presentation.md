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
    padding: 28px 48px 45px 48px;
    font-size: 24px;
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
    font-size: 30px;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 6px;
    margin: 12px 0 10px 0;
  }

  h3 {
    color: var(--accent);
    font-size: 26px;
    margin: 10px 0 6px 0;
  }

  p {
    line-height: 1.45;
    margin: 6px 0;
    font-size: 1em;
  }

  ul, ol {
    line-height: 1.45;
    margin: 6px 0 10px 0;
    padding-left: 24px;
    font-size: 0.98em;
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
    padding: 10px 16px !important;
    margin: 8px 0 !important;
  }

  pre code {
    background: none !important;
    color: #F8FAFC !important;
    font-size: 16px !important;
    line-height: 1.35 !important;
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
    font-size: 21px !important;
    letter-spacing: 0.4px !important;
  }

  td {
    background: var(--surface) !important;
    color: var(--text) !important;
    padding: 10px 18px !important;
    border: 1px solid var(--border) !important;
    font-size: 20px !important;
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
    padding: 46px 60px !important;
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
    font-size: 50px !important;
    color: var(--white) !important;
    text-align: left !important;
    margin: 20px 0 14px 0 !important;
    font-weight: 700 !important;
    letter-spacing: -1px !important;
  }

  section.cover p:not(:first-of-type),
  section[data-marpit-pagination="1"] p:not(:first-of-type) {
    color: var(--text) !important;
    font-size: 26px !important;
    line-height: 1.6 !important;
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

![Solicode](./logo_solicode.png) ![OFPPT](./ofppt_logo.png)

# Define

## Design Thinking

**Comprendre le problème de l'utilisateur**

**Réalisée par :** Ranya Amzghar  
**Encadrant :** Essarraj Fouad
<!-- Aujourd'hui, je vais vous présenter l'étape Define du Design Thinking. -->

---

<!-- _class: light -->

# Plan

- Define et son objectif
- Comprendre les utilisateurs et leurs besoins
- Insights, POV, Problem Statement et HMW
- Exemple : News Application
<!-- Voici, le plan de cette présentation -->
---

# 1. Qu'est-ce que Define ?

**Define** est une étape de Design Thinking.

Elle permet de :

- Comprendre les utilisateurs.
- Identifier leurs problèmes.
- Trouver leurs vrais besoins.
- Formuler le problème clairement.

<!-- Define sert à comprendre les problèmes et les besoins des utilisateurs. -->

---

# 2. Objectif de Define

- Identifier le problème principal.
- Comprendre les besoins des utilisateurs.
- Organiser les informations.
- Écrire une problématique claire.


<!-- L'objectif de Define est de trouver le problème principal et de le décrire clairement. -->
---

# 3. Comprendre les utilisateurs

**Qui ?** Qui utilise l'application ?  
**Quel problème ?** Quelle difficulté rencontre-t-il ?  
**Quel besoin ?** De quoi a-t-il besoin ?

### Exemple : News Application

- **Qui ?** Les personnes qui suivent l'actualité.
- **Problème ?** Les informations sont sur plusieurs sites.
- **Besoin ?** Trouver les actualités facilement.
<!-- Nous devons connaître les utilisateurs, leurs problèmes et leurs besoins. -->
---

# 4. Insights

Un **Insight** est une information importante qui nous aide à comprendre le problème.

### Exemple : News Application

**Observation :** Les utilisateurs consultent plusieurs sites pour lire les actualités.

**Insight :** Ils ont besoin d'un accès simple et organisé aux informations.

<!-- Un insight nous aide à comprendre le vrai besoin derrière un problème. -->
---

# 5. Point of View (POV)

Le **POV** décrit le problème du point de vue de l'utilisateur.

### Sa formule

- Utilisateur
- Besoin
- Raison du besoin

### Exemple

> Les personnes qui suivent l'actualité ont besoin d'un moyen simple pour trouver les nouvelles, car les informations sont dispersées sur plusieurs sites.

<!-- Le POV explique qui est l'utilisateur, son besoin et pourquoi il a ce besoin. -->
---

# 6. Problem Statement

Le **Problem Statement** est une phrase qui explique clairement le problème.

### Exemple : News Application

> Les utilisateurs ont du mal à trouver rapidement les actualités, car les informations sont disponibles sur plusieurs sites. Cela leur fait perdre du temps.

**Son rôle :** donner une direction claire pour résoudre le problème.
<!-- Le Problem Statement décrit clairement le problème que nous voulons résoudre. -->
---

# 7. How Might We (HMW) ?

**HMW** signifie « How Might We? », en français « Comment pourrions-nous ? ».

Cette question transforme un problème en possibilité de trouver des idées.

**Problème :** Les utilisateurs perdent du temps à chercher les actualités sur plusieurs sites.

**HMW :** « Comment pourrions-nous aider les utilisateurs à trouver facilement les dernières actualités ? »
<!-- HMW transforme le problème en une question pour chercher des solutions. -->
---

# 8. Exemple pratique

## News Application

- **Utilisateur :** les personnes qui veulent suivre l'actualité.
- **Problème :** les informations sont dispersées sur plusieurs sites.
- **Besoin :** trouver les actualités facilement et rapidement.
- **Insight :** les utilisateurs ont besoin d'informations simples et bien organisées.
<!-- Les utilisateurs ont besoin d'un endroit simple pour trouver les actualités rapidement. -->
---

# 9. Résultat de Define

**POV :**  
Les utilisateurs ont besoin d'un moyen simple pour trouver les actualités, car les informations sont dispersées sur plusieurs sites.

**Problem Statement :**  
Les utilisateurs perdent du temps à chercher les actualités sur différentes plateformes.

**HMW :**  
Comment pourrions-nous aider les utilisateurs à trouver les dernières actualités dans un seul endroit ?
<!-- À la fin de Define, nous avons un POV, un Problem Statement et une question HMW -->
---

# Conclusion

Define permet de :

- Comprendre les utilisateurs.
- Identifier leurs besoins.
- Trouver le problème principal.
- Formuler une problématique claire.
- Préparer la recherche de solutions.

<!-- Define nous aide à comprendre les utilisateurs et à identifier leur vrai problème. -->
---

# Merci

Merci pour votre attention.

**Define : comprendre le bon problème avant de chercher la bonne solution.**

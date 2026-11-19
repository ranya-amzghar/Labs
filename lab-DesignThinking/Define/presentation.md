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

**Comprendre et définir le problème de l'utilisateur**

**Réalisée par :** Ranya Amzghar  
**Encadrant :** Es-sarraj Fouad
<!-- Aujourd'hui, je vais vous présenter l'étape Define du Design Thinking. -->

---

<!-- _class: light -->

1. Définition de l'étape Define
2. Les techniques de Define
   - Insights
   - Affinity Diagram
   - Point of View (POV)
   - Problem Statement
   - How Might We (HMW)
3. Application pratique : News Application
<!-- Voici, le plan de cette présentation -->
---

# 1. Qu'est-ce que Define ?

**Define** est une étape de Design Thinking.

Elle permet de :

- Comprendre les difficultés des utilisateurs.
- Identifier leurs problèmes.
- Trouver leurs vrais besoins.
- Formuler le problème clairement.

<!-- Define sert à comprendre les problèmes et les besoins des utilisateurs. -->

---

# 2. Les techniques

Pour définir correctement le problème, nous utilisons plusieurs techniques :

| Technique | Son objectif |
|---|---|
| **Insights** | Comprendre les besoins cachés. |
| **Affinity Diagram** | Organiser les informations par thèmes. |
| **POV** | Définir le besoin de l'utilisateur. |
| **Problem Statement** | Décrire clairement le problème. |
| **HMW** | Transformer le problème en question. |

<!-- Dans cette étape, voici les techniques pour mieux comprendre les utilisateurs et définir leur problème. -->

---

# 3. Insights

Un **Insight** est une information importante qui nous aide à comprendre le problème.

### Exemple : News Application

**Observation :** Les utilisateurs consultent plusieurs sites pour lire les actualités.

**Insight :** Ils ont besoin d'un accès simple et organisé aux informations.

<!-- Un insight nous aide à comprendre le vrai besoin derrière un problème. -->
---

# 4. Affinity Diagram

Un **Affinity Diagram** est une technique qui permet de regrouper les informations similaires dans différentes catégories.

### Comment le réaliser ?

- Collecter les observations et les idées.
- Regrouper les informations similaires.
- Donner un titre à chaque groupe.
- Identifier les thèmes principaux.

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
### Sa formule:

**[Qui]** rencontre **[quel problème]** lorsque **[situation]**, ce qui entraîne **[conséquence]**

### Exemple 

>Les utilisateurs ont des difficultés à trouver les actualités lorsque les informations sont dispersées sur plusieurs sites, ce qui leur fait perdre du temps.

**objectif :** donner une direction claire pour résoudre le problème.
<!-- Le Problem Statement décrit le problème, la situation dans laquelle il apparaît et ses conséquences. -->
---

# 7. How Might We (HMW) ?

**HMW** signifie « How Might We? », en français « Comment pourrions-nous ? ».

C'est une question qui transforme un problème en une opportunité de rechercher des idées et des solutions.
### Sa formule

> **Comment pourrions-nous + aider l'utilisateur + répondre à son besoin ?**

### Exemple : News Application

**Problème :**

Les utilisateurs perdent du temps à chercher les actualités sur plusieurs sites.

**HMW :**

> Comment pourrions-nous aider les utilisateurs à trouver facilement les dernières actualités dans un seul endroit ?
<!-- HMW transforme le problème en une question pour chercher des solutions. -->
---

# 8. Pratique : News Application

Maintenant, appliquons les techniques de Define à notre projet **News Application**.

### Objectif de l'application

- Afficher les dernières actualités.
- Organiser les actualités par catégories.
- Faciliter la recherche d'informations.
- Permettre une consultation simple et rapide.

### Situation étudiée

Imaginons que nous avons interrogé des personnes qui suivent régulièrement l'actualité.

---

**Exemples d'observations :**

- Elles visitent plusieurs sites pour lire les actualités.
- Elles ont du mal à trouver certaines informations.
- Elles cherchent les actualités par sujet.
- Elles perdent du temps à changer de site.

### Insights identifiés

| Observation | Insight |
|---|---|
| Plusieurs sites à consulter | Besoin d'un accès centralisé. |
| Difficulté à trouver des informations | Besoin d'une recherche simple. |
| Actualités sur différents sujets | Besoin d'une bonne organisation. |

---

## Diagramme d'affinités 

Organisons les observations des utilisateurs selon leurs similitudes :

<div class="grid">
  <div class="group blue">
    <h3>Navigation</h3>
    <div class="note">Navigation difficile</div>
    <div class="note">Trop de temps pour chercher</div>
  </div>
  <div class="group green">
    <h3>Organisation</h3>
    <div class="note">Actualités mal organisées</div>
    <div class="note">Difficulté à trouver ses sujets préférés</div>
  </div>
  <div class="group yellow">
    <h3>Expérience utilisateur</h3>
    <div class="note">Trop de publicités</div>
  </div>
  <div class="group purple">
    <h3>Accessibilité</h3>
    <div class="note">Accès rapide aux dernières actualités</div>
  </div>
</div>

<style>
.grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 22px;
  margin-top: 25px;
}
.group {
  padding: 15px;
  border-radius: 12px;
  text-align: center;
  min-height: 145px;
}
.group h3 {
  font-size: 21px;
  margin: 0 0 12px;
}
.note {
  background: white;
  color: #1e293b;
  border-radius: 7px;
  padding: 9px;
  margin: 7px 0;
  font-size: 17px;
}
.blue { background: #DBEAFE; color: #1E40AF; }
.green { background: #DCFCE7; color: #166534; }
.yellow { background: #FEF3C7; color: #92400E; }
.purple { background: #F3E8FF; color: #6B21A8; }
</style>

---

# POV

Après l'analyse des informations, nous pouvons définir le besoin de l'utilisateur.

### Notre POV

> Les personnes qui suivent l'actualité ont besoin d'une plateforme simple et organisée parce que les informations sont dispersées sur plusieurs sites.

### Décomposition

| Élément | Notre projet |
|---|---|
| Utilisateur | Personnes qui suivent l'actualité |
| Besoin | Trouver les actualités facilement |
| Raison | Les informations sont dispersées |

---

# Problem Statement

> Les utilisateurs ont des difficultés à trouver les actualités lorsque les informations sont dispersées sur plusieurs sites, ce qui leur fait perdre du temps.

### Décomposition

| Élément | Notre projet |
|---|---|
| Qui ? | Les utilisateurs |
| Problème ? | Difficulté à trouver les actualités |
| Situation ? | Informations dispersées sur plusieurs sites |
| Impact ? | Perte de temps |

---

# How Might We ?

À partir de notre Problem Statement, nous transformons le problème en une question.

### HMW

> Comment pourrions-nous aider les utilisateurs à trouver facilement les dernières actualités dans un seul endroit ?

### Pourquoi cette question ?

- Elle se concentre sur le besoin de l'utilisateur.
- Elle ouvre plusieurs possibilités de solutions.
- Elle encourage la créativité de l'équipe.

---

# 9. Résultat final de Define

Voici le résultat de l'application des techniques de Define à notre projet.

| Élément | Résultat |
|---|---|
| **Insight** | Besoin d'informations centralisées et organisées. |
| **Affinity Diagram** | Accès, recherche et organisation. |
| **POV** | Les utilisateurs ont besoin d'une plateforme simple et organisée. |
| **Problem Statement** | Les utilisateurs perdent du temps à chercher les actualités sur plusieurs sites. |
| **HMW** | Comment faciliter l'accès aux dernières actualités dans un seul endroit ? |

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

# Merci pour votre attention.

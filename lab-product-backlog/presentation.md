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

  section::after {
    content: "" !important;
    display: none !important;
  }

  section::after {
    content: attr(data-marpit-pagination) !important;
    display: block !important;
    position: absolute;
    right: 24px;
    bottom: 14px;
    color: var(--muted);
    font-size: 13px;
    font-weight: 600;
  }

  .steps,
  .planning,
  .example-grid {
    display: grid;
    gap: 16px;
    margin: 18px 0;
  }

  .steps {
    grid-template-columns: repeat(5, minmax(0, 1fr));
  }

  .planning {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .example-grid {
    grid-template-columns: 1.15fr 0.85fr;
    align-items: stretch;
  }

  .steps > div,
  .planning > div,
  .example-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-top: 3px solid var(--accent);
    border-radius: 8px;
    padding: 14px 16px;
  }

  .steps > div {
    font-size: 19px;
    line-height: 1.4;
  }

  .planning > div {
    font-size: 21px;
    line-height: 1.4;
  }

  .example-card {
    font-size: 18px;
    line-height: 1.35;
  }

  .example-card table {
    margin: 10px 0 !important;
  }

  .example-card th,
  .example-card td {
    padding: 7px 9px !important;
    font-size: 16px !important;
  }

  .example-card hr {
    border: 0;
    border-top: 1px solid var(--border);
    margin: 12px 0;
  }

  .example-card small {
    color: var(--muted);
    font-size: 15px;
  }

  .discovery-flow,
  .content-grid,
  .breakdown-grid,
  .manage-grid,
  .management-grid,
  .definition-grid {
    display: grid;
    gap: 12px;
    margin: 16px 0;
  }

  .discovery-flow {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .content-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .breakdown-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
    align-items: stretch;
  }

  .manage-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .management-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .definition-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .discovery-flow > div,
  .content-grid > div,
  .breakdown-grid > div,
  .manage-grid > div,
  .management-grid > div,
  .definition-grid > div {
    background: var(--surface);
    border: 1px solid var(--border);
    border-top: 3px solid var(--accent);
    border-radius: 8px;
    padding: 11px 13px;
    font-size: 17px;
    line-height: 1.32;
  }

  .content-grid > div,
  .manage-grid > div,
  .management-grid > div,
  .definition-grid > div {
    min-height: 100px;
  }

  .backlog-table {
    table-layout: fixed;
  }

  .backlog-table th:nth-child(1),
  .backlog-table td:nth-child(1) {
    width: 8%;
  }

  .backlog-table th:nth-child(2),
  .backlog-table td:nth-child(2) {
    width: 32%;
  }

  .backlog-table th:nth-child(3),
  .backlog-table td:nth-child(3) {
    width: 17%;
  }

  .backlog-table th:nth-child(4),
  .backlog-table td:nth-child(4) {
    width: 43%;
  }

  .backlog-table th,
  .backlog-table td {
    padding: 7px 8px !important;
    font-size: 15px !important;
    line-height: 1.25 !important;
    overflow-wrap: anywhere;
  }

  section[data-marpit-pagination="1"]::after {
    display: none !important;
  }
---

<!-- _class: cover -->

![Solicode](logo_solicode.png) ![OFPPT](ofppt_logo.png)

# Product Backlog
## Construire, organiser et gérer les besoins d'un produit

**Réalisée par :** Ranya Amzghar  
**Encadrée par :** Essarraj Fouad

---

# Plan de présentation

1. **Comprendre** le rôle et la structure du Product Backlog.
2. **Construire et gérer** des éléments clairs et utiles.
3. **Mettre en pratique** avec un exemple de backlog.

---

# Introduction — Pourquoi organiser les besoins ?

Un projet fait émerger des besoins, des idées, des corrections et des changements.

### Sans organisation

- Les priorités sont difficiles à comprendre.
- Des personnes peuvent avoir des visions différentes du travail.
- Des besoins importants risquent d'être oubliés ou commencés trop tôt.

Le **Product Backlog** donne une vue partagée avant et pendant le développement. Il aide à décider quoi clarifier ou réaliser ensuite.

---

# Définition du Product Backlog

Le **Product Backlog** est la liste évolutive et ordonnée du travail connu nécessaire pour améliorer un produit.

<div class="definition-grid">
  <div><strong>Liste d'éléments</strong><br>Chaque élément représente un besoin ou un travail utile.</div>
  <div><strong>Ordonnée</strong><br>Les éléments placés plus haut sont ceux à examiner en premier, selon leur valeur et le contexte.</div>
  <div><strong>Évolutive</strong><br>Elle change lorsque l'équipe apprend ou que les besoins évoluent.</div>
</div>

- Le **Product Goal** décrit la direction à long terme du produit.
- Le **Product Owner** est responsable de la gestion efficace et de l'ordre du backlog.

**Exemple :** pour aider les étudiants à découvrir des conseils, la recherche d'articles pourrait être placée avant une amélioration moins utile à court terme.

---

# Structure et contenu du Product Backlog

Chaque entrée est un **Product Backlog Item (PBI)** : une unité de travail ou de valeur suivie dans le backlog.

<div class="content-grid">
  <div><strong>Fonctionnalités</strong><br>Nouvelles capacités offertes aux utilisateurs.</div>
  <div><strong>Améliorations</strong><br>Évolution d'une capacité existante.</div>
  <div><strong>Corrections de bugs</strong><br>Résolution d'un défaut observé.</div>
  <div><strong>Besoins techniques</strong><br>Travail utile à la qualité ou à l'évolution du produit.</div>
  <div><strong>Recherche</strong><br>Explorer une question pour réduire une incertitude.</div>
  <div><strong>User Stories</strong><br>Une façon d'exprimer un PBI, mais pas la seule.</div>
</div>

---

# Identifier les besoins

Ces activités aident à découvrir des besoins ; leurs résultats sont des pistes à analyser, pas automatiquement des exigences validées.

<div class="discovery-flow">
  <div><strong>1. Diagramme de contexte</strong><br>Identifier le système, ses acteurs et leurs interactions.</div>
  <div><strong>2. Empathie</strong><br>Comprendre les besoins, attentes et difficultés des utilisateurs.</div>
  <div><strong>3. Définition</strong><br>Formuler le problème principal à résoudre.</div>
  <div><strong>4. Idéation</strong><br>Proposer des solutions possibles à examiner.</div>
</div>

**Résultat :** besoins mieux compris et idées de solutions à transformer en PBI après discussion.

---

# Transformer un besoin en PBI

Pour créer un PBI clair, préciser le besoin, le résultat attendu et un découpage adapté.

<div class="breakdown-grid">
  <div><strong>1. Identifier</strong><br>Quel besoin ou résultat doit être traité ?</div>
  <div><strong>2. Décrire</strong><br>Quel résultat utile doit-on obtenir ?</div>
  <div><strong>3. Découper</strong><br>Un besoin trop grand devient plusieurs éléments plus petits.</div>
</div>

Un **Epic** représente un besoin large ; il peut être décomposé en PBI plus petits, par exemple des User Stories.

> **En tant qu'étudiant**, je veux **rechercher des articles** afin de **trouver des expériences utiles à mon parcours**.

La User Story est une formulation possible du besoin, pas une obligation pour chaque PBI.

---

# Organiser et gérer le Product Backlog

<div class="management-grid">
  <div><strong>Ordonner</strong><br>Mettre en premier les éléments les plus utiles selon la valeur et le contexte.</div>
  <div><strong>Prioriser</strong><br>MoSCoW peut aider à discuter Must, Should, Could, Won't ; cette technique est facultative.</div>
  <div><strong>Estimer</strong><br>Les Story Points comparent une taille ; ils ne mesurent pas une durée garantie.</div>
  <div><strong>Clarifier</strong><br>Décrire le besoin, le résultat attendu et des critères d'acceptation pour ce PBI.</div>
  <div><strong>Definition of Done</strong><br>Standard de qualité partagé pour tout élément terminé, distinct des critères propres au PBI.</div>
  <div><strong>Affiner et mettre à jour</strong><br>Clarifier, découper, réordonner ou retirer des éléments lorsque les besoins changent.</div>
</div>

Le Product Backlog est **vivant** : il évolue avec les retours, les décisions et les nouvelles connaissances.

---

# Mise en pratique — Blog des Lauréats

Les PBI, priorités et résultats ci-dessous sont des **propositions initiales**, pas des besoins validés auprès des utilisateurs.

<table class="backlog-table">
  <thead>
    <tr><th>ID</th><th>Product Backlog Item proposé</th><th>Ordre proposé</th><th>Résultat attendu</th></tr>
  </thead>
  <tbody>
    <tr><td>PB-01</td><td>Consulter les articles publiés.</td><td>1 — Haute</td><td>Les articles publiés sont accessibles au visiteur.</td></tr>
    <tr><td>PB-02</td><td>Rechercher des articles.</td><td>2 — Haute</td><td>Les résultats correspondants s'affichent ; un état vide apparaît sinon.</td></tr>
    <tr><td>PB-03</td><td>Écrire et gérer des articles.</td><td>3 — Moyenne</td><td>Le lauréat peut créer et modifier un article.</td></tr>
    <tr><td>PB-04</td><td>Gérer les utilisateurs et modérer les articles.</td><td>4 — À discuter</td><td>L'administrateur dispose des actions de gestion et de contrôle retenues.</td></tr>
  </tbody>
</table>

L'ordre et le niveau de priorité restent à discuter avec les parties prenantes et le Product Owner.

---

# Conclusion — Un Product Backlog utile

- Le Product Backlog est une vue **ordonnée et évolutive** du travail nécessaire au produit.
- Il peut contenir fonctionnalités, améliorations, corrections et autres PBI.
- Les besoins deviennent des éléments clairs grâce à l'identification, la formulation et le découpage.
- L'ordre et la mise à jour le gardent utile pendant tout le projet.

### Compétences acquises

**Identifier · transformer · découper · clarifier · organiser · maintenir**

> Un Product Backlog bien géré transforme des besoins changeants en un travail produit clair et partagé.

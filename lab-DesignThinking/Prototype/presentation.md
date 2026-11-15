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

# Prototype

**Transformer les idées en solutions concrètes et testables**

**Réalisée par :** Ranya Amzghar  
**Encadrant :** Essarraj Fouad
<!-- Aujourd'hui, je vais vous présenter l'étape Prototype du Design Thinking. -->

---

<!-- _class: light -->

# Plan

- Prototype et son objectif
- Niveaux de fidélité : Low-Fidelity vs High-Fidelity
- Méthodes et outils : Papier, Wireframes et Prototype interactif
- Exemple : News Application
<!-- Voici le plan de cette présentation -->

---

# 1. Qu'est-ce que Prototype ?

**Prototype** est la quatrième étape du Design Thinking.

Elle permet de :

- Donner une forme concrète aux idées retenues.
- Rendre les solutions visibles et manipulables.
- Tester rapidement les concepts avec les utilisateurs.
- Identifier ce qui fonctionne et ce qui doit être corrigé.

<!-- Prototype permet de transformer nos idées en une version concrète et testable. -->

---

# 2. Objectif du Prototypage

- Matérialiser la solution rapidement et à faible coût.
- Vérifier si l'idée répond au besoin de l'utilisateur.
- Détecter les erreurs dès le début (*Fail fast, learn fast*).
- Améliorer le produit grâce aux retours concrets.

<!-- L'objectif du prototypage est de tester vite sans investir trop de temps ni de budget. -->

---

# 3. Niveaux de fidélité

| Niveau | Caractéristiques | Avantages |
| :--- | :--- | :--- |
| **Basse fidélité (Low-Fi)** | Croquis papier, schémas simples | Rapide, peu coûteux, retours francs |
| **Haute fidélité (High-Fi)** | Maquettes interactives, design soigné | Proche du produit final, teste l'ergonomie |

**Règle d'or :** Commencer toujours par la basse fidélité avant de créer un prototype détaillé.

<!-- Nous distinguons les prototypes basse fidélité et haute fidélité selon le niveau de détail. -->

---

# 4. Prototypage papier (Paper Prototype)

Le **Paper Prototype** consiste à dessiner les écrans de l'application sur papier.

### Exemple : News Application

- **Écran 1 :** Page d'accueil avec les catégories d'actualités.
- **Écran 2 :** Liste des articles récents sous forme de cartes.
- **Écran 3 :** Vue détaillée pour lire un article complet.

**Son rôle :** Valider l'organisation générale des écrans en quelques minutes.

<!-- Le prototype papier permet de dessiner les écrans à la main pour valider la disposition. -->

---

# 5. Wireframes

Le **Wireframe** est un schéma numérique en noir et blanc représentant la structure de la page.

### Sa composition

- Emplacement des zones de contenu (titres, images, textes).
- Disposition des éléments de navigation (menus, boutons).
- Sans couleurs ni styles graphiques définitifs.

### Exemple : News Application

> Une structure claire avec une barre de recherche en haut, le fil d'actualités au centre et un menu de navigation en bas.

<!-- Le wireframe fixe l'architecture et les zones de contenu sans se soucier du design visuel. -->

---

# 6. Prototype interactif

Le **Prototype interactif** simule l'utilisation réelle de l'application.

### Exemple : News Application

- Cliquer sur un thème filtre instantanément les articles.
- Cliquer sur un titre ouvre la page de lecture complète.
- Cliquer sur "Favoris" enregistre l'article pour plus tard.

**Son rôle :** Tester les interactions réelles et le parcours de l'utilisateur.

<!-- Le prototype interactif permet à l'utilisateur de cliquer et de naviguer comme dans une vraie application. -->

---

# 7. Tester et recueillir les retours

Le prototype est conçu pour être mis entre les mains de l'utilisateur.

### Ce que l'on observe

- **Compréhension :** L'utilisateur comprend-il la navigation immédiatement ?
- **Efficacité :** Trouve-t-il l'actualité recherchée rapidement ?
- **Difficultés :** Où hésite-t-il ou clique-t-il par erreur ?

**Son rôle :** Récolter des retours précis pour affiner et améliorer la solution.

<!-- Observer l'utilisateur sur le prototype nous aide à identifier ses blocages et à perfectionner la solution. -->

---

# 8. Exemple pratique

## News Application

- **Idée retenue :** Un espace unique regroupant toutes les actualités par thème.
- **Étape Papier :** Croquis rapides des trois écrans clés.
- **Étape Wireframe :** Structure numérique de la grille d'articles et des filtres.
- **Étape Interactive :** Maquette cliquable permettant de simuler la recherche et la lecture.

<!-- Cet exemple montre l'évolution du prototype depuis le croquis jusqu'à la maquette cliquable. -->

---

# 9. Résultat de Prototype

**Maquette concrète et testable :**  
Une version interactive qui illustre fidèlement le parcours utilisateur.

**Validation du parcours :**  
L'utilisateur accède aux actualités en moins de trois clics.

**Préparation au Test :**  
Une liste claire des points à valider lors de l'étape suivante (Test).

<!-- À la fin du prototypage, nous disposons d'une version concrète prête pour les tests utilisateurs. -->

---

# Conclusion

Prototype permet de :

- Rendre les idées tangibles et compréhensibles par tous.
- Échouer tôt pour réussir plus rapidement.
- Valider les choix de conception sans écrire une ligne de code.
- Gagner du temps et économiser les ressources de développement.
- Préparer la phase finale de Test.

<!-- Le prototypage permet de concrétiser les idées et d'apprendre rapidement avant le développement. -->

---

# Merci

Merci pour votre attention.

**Prototype : donner forme aux idées pour apprendre et progresser rapidement.**


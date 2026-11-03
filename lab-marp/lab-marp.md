---
marp: true
theme: default
size: 16:9
paginate: true
style: |
  :root {
  --bg: #0B1628;
  --bg-soft: #16263D;
  --card: #243B55;
  --accent: #38BDF8;
  --light: #BAE6FD;
  --text: #E2E8F0;
  --white: #FFFFFF;
  --muted: #8293A8;
    }
  section {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: var(--bg);
    color: var(--text);
    font-size: 25px;
    padding: 60px 75px;
    border-top: 5px solid var(--accent);
  }

  h1 {
    color: var(--white);
    font-size: 2.3em;
    font-weight: 700;
    letter-spacing: -1px;
    margin-bottom: 0.5em;
  }

  h2 {
    color: var(--white);
    font-size: 1.65em;
    border-bottom: 2px solid #40351c;
    padding-bottom: 12px;
    margin-bottom: 0.8em;
  }

  h3 {
    color: var(--accent);
    font-size: 1.1em;
    margin-top: 0.8em;
  }

  p {
    line-height: 1.5;
  }

  strong {
    color: var(--light);
  }

  ul, ol {
    line-height: 1.7;
  }

  li::marker {
    color: var(--accent);
  }

  code {
    background: var(--bg-soft);
    color: var(--light);
    padding: 3px 8px;
    border-radius: 5px;
    font-size: 0.85em;
  }

  pre {
    background: #111118;
    border: 1px solid #292435;
    border-left: 5px solid var(--accent);
    border-radius: 10px;
    padding: 16px 20px;
  }

  pre code {
    background: none;
    padding: 0;
  }

  blockquote {
    background: var(--bg-soft);
    border-left: 5px solid var(--accent);
    padding: 12px 20px;
    color: #aaa5bb;
  }

  section::after {
    color: var(--muted);
    font-size: 0.6em;
    font-weight: 600;
  }

  /* Cover Slide */

  section[data-marpit-pagination="1"] {
    background: #07070a;
    text-align: left;
    padding: 50px 75px;
    border-top: 5px solid var(--accent);
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
    color: #a5a1b3;
    font-size: 0.85em;
    line-height: 1.9;
  }

  section[data-marpit-pagination="1"]::after {
    display: none;
  }
---

![Solicode](logo_solicode.png) ![Ofppt](ofppt_logo.png)

# Application de news

**Réalisée par :** Ranya Amzghar
**Encadrée par :** Essarraj Fouad

---

## Plan:

1. **Introduction**
2. **Problematique**
3. **Analyse**
4. **Conception**
5. **Réalisation**
6. **Conclusion**

---

## Introduction:

Ce projet permet d'afficher les differents news et leurs section.

<!-- Mon projet est une application pour lire les nouvelles. -->
---

## Problematique: 

Aujourd'hui, les utilisateurs rencontrent parfois des difficultés pour trouver des actualités organisées et accessibles sur une seule plateforme.

### Besoins identifiés:

- Accéder rapidement aux dernières actualités.

- Consulter les articles par catégorie.

- Rechercher des informations facilement.

- Disposer d'une interface simple et responsive.
<!-- Les utilisateurs veulent lire les nouvelles facilement. -->
---

## Analyse:

### Besoins des utilisateurs:

- Voir les articles.
- Lire les détails des articles.
<!-- L'application permet de lire et de chercher des nouvelles. -->
---

### Fonctionnalités:

Afficher la liste des actualités.

Consulter les détails d'un article.

Ajouter des articles.

Gérer les sections.

---

## Conception:

### Diagrammes d'utilisation:

**Visiteur:**

Afficher la liste des articles.

Consulter les détails d'un article.

**Administrateur:**

Ajouter un article.

Afficher la liste des articles.

Ajouter des sections.

---

**Modèle de données:**

Articles
```
id, nom, contenu, date, image...
```
Section 
```
id, nom, couleur, icone, description.
```

<!-- Les diagrammes montrent le fonctionnement de mon application. -->
---
## Réalisation:

### Stack technique:

### Backend:
- **Laravel** - Framework PHP moderne
- **MySQL** - Base de données relationnelle

### Frontend:
- **Alpine.js** - Framework JavaScript léger et réactif
- **Tailwind CSS** - Framework CSS utility-first
---
### Prototype:

Espace utilisateur : affichage et consultation des actualités.

Espace administrateur : gestion des articles et des catégories.

<!-- J'utilise HTML, CSS, JavaScript, PHP et MySQL pour créer mon application. -->
---
### Conclusion:

Ce projet permet de mettre en pratique les compétences en développement web, notamment la création d'interfaces, la gestion des données et les opérations CRUD.
<!-- Mon application permet de lire les nouvelles et d'apprendre le développement web. -->


<!-- to install the package marp CLI a tool help to execute the marp to pdf,ppt -->
<!-- npm install -g @marp-team/marp-cli -->
<!-- marp presentation.md --pdf
marp presentation.md --html
marp presentation.md --pptx
--allow-local-files -->
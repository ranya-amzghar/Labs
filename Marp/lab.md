---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0d1117 !important;
    color: #e6edf3 !important;
    font-family: 'Segoe UI', system-ui, sans-serif !important;
    padding: 50px 70px;
    font-size: 30px !important;
  }
  h1 {
    color: #58a6ff !important;
    font-size: 46px !important;
    border-bottom: 2px solid #30363d;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }
  h2 {
    color: #58a6ff !important;
    font-size: 34px !important;
    border-bottom: 1px solid #30363d;
    padding-bottom: 8px;
    margin-bottom: 18px;
  }
  p {
    color: #e6edf3 !important;
    font-size: 29px !important;
    margin: 6px 0;
  }
  ul li, ol li {
    color: #e6edf3 !important;
    font-size: 20px !important;
    margin-bottom: 8px;
    line-height: 1.5;
  }
  strong {
    color: #79c0ff !important;
  }
  pre {
    background-color: #161b22 !important;
    border: 1px solid #30363d;
    border-radius: 6px;
    font-size: 16px !important;
    color: #ffffff !important;
  }
  pre code {
    color: #ffffff !important;
    background-color: transparent !important;
    font-family: 'Consolas', 'Courier New', monospace !important;
    font-size: 16px !important;
  }
  pre code span,
  pre code * {
    color: #ffffff !important;
  }
  code {
    background-color: #2d2d2d !important;
    color: #ffffff !important;
    font-family: 'Consolas', 'Courier New', monospace !important;
    font-size: 16px !important;
    padding: 2px 6px;
    border-radius: 4px;
  }
  blockquote {
    border-left: 4px solid #58a6ff;
    background: #161b22 !important;
    padding: 12px 18px;
    border-radius: 0 6px 6px 0;
    margin: 12px 0;
    font-size: 18px !important;
  }
  blockquote p {
    color: #f7f7f7 !important;
    font-size: 18px !important;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th {
    background-color: #1f6feb !important;
    color: #ffffff !important;
    padding: 10px 16px;
    border: 1px solid #30363d;
    text-align: left;
    font-size: 18px !important;
  }
  td {
    background-color: #161b22 !important;
    color: #e6edf3 !important;
    padding: 8px 16px;
    border: 1px solid #30363d;
    font-size: 18px !important;
  }
  section.cover {
    background: linear-gradient(160deg, #0d1117 60%, #1a2332 100%) !important;
    justify-content: center;
  }
  section.cover h1 {
    color: #58a6ff !important;
    font-size: 52px !important;
    border-color: #30363d;
    margin-bottom: 24px;
  }
  section.cover p {
    color: #c9d1d9 !important;
    font-size: 22px !important;
    margin: 8px 0;
  }
  section.plan h2 {
    color: #3fb950 !important;
    font-size: 36px !important;
    border-color: #21262d;
  }
  section.plan ol li {
    color: #e6edf3 !important;
    font-size: 24px !important;
    margin-bottom: 20px;
  }
  section.small h2 {
    font-size: 26px !important;
    color: #58a6ff !important;
  }
  section.small p,
  section.small ul li,
  section.small ol li {
    font-size: 16px !important;
    color: #e6edf3 !important;
    line-height: 1.5;
  }
  section.small pre {
    font-size: 14px !important;
  }
  section.small pre code {
    font-size: 14px !important;
  }
  section.small code {
    font-size: 14px !important;
  }
  section.small th {
    font-size: 15px !important;
  }
  section.small td {
    font-size: 15px !important;
  }
  section.small blockquote p {
    font-size: 15px !important;
  }
---
<!-- _class: cover -->

# Marp — Présentations en Markdown

Créer des slides professionnelles avec du texte pur

**Réalisée par :** Ranya Amzghar
**Encadrée par :** Essarraj Fouad

---
<!-- _class: plan -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

**Marp** est un écosystème open-source qui convertit des fichiers Markdown en présentations HTML ou PDF.

- Slides écrites en **texte brut** — pas de logiciel propriétaire requis.
- Prévisualisation en direct dans **VS Code** via l'extension Marp.
- Export possible en **HTML**, **PDF**, ou PPTX.
- Un seul fichier `.md` = toute la présentation.

---

## 2. Problems Encountered

Créer des présentations avec des outils classiques présente des limites concrètes :

- **Pas de versioning Git** — les fichiers `.pptx` ne se comparent pas ligne à ligne.
- **Mise en forme répétitive** — chaque slide se formate manuellement.
- **Dépendance logicielle** — PowerPoint ou Keynote doivent être installés.
- **Partage difficile** — les exports varient selon la version du logiciel.

---

## 3. Solutions Implemented

Marp adresse ces problèmes avec une approche déclarative :

- **Fichier `.md` versionnable** — `git diff` fonctionne sur le texte des slides.
- **Style centralisé** — un bloc CSS dans le frontmatter s'applique à toutes les slides.
- **Export universel** — HTML et PDF lisibles sans logiciel spécifique.
- **Séparateur unique** — `---` suffit pour créer une nouvelle slide.

---

## Frontmatter YAML

```yaml
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0d1117;
    color: #e6edf3;
    font-family: 'Segoe UI', sans-serif;
  }
  h1, h2 { color: #58a6ff; }
---
```

> Le frontmatter doit être placé au tout début du fichier.

---

## Séparateurs et Classes de Slides

```markdown
# Slide 1 — Titre

Premier contenu.

---

# Slide 2 — Nouvelle slide

Deuxième contenu.

---
<!-- _class: ma-classe -->

# Slide 3 — Classe personnalisée

Style CSS appliqué uniquement à cette slide.
```

| Syntaxe | Effet |
|:--------|:------|
| `---` seul | Nouvelle slide |
| `<!-- _class: nom -->` | Classe CSS locale |
| `<!-- _paginate: false -->` | Masque le numéro de page |

---

## Titres, Listes et Formatage

```markdown
## Titre de slide (H2 recommandé)

- Point principal
  - Sous-point A
  - Sous-point B
- Deuxième point

Texte en **gras**, *italique*, et `code inline`.
```

> Limiter à **5 points** par slide pour la lisibilité sur grand écran.

---

## Images et Directives

```markdown
![center w:500](https://marp.app/assets/og-image.jpg)

![bg opacity:0.3](./assets/background.png)

![w:350](image1.png)  ![w:350](image2.png)
```

| Directive | Effet |
|:----------|:------|
| `w:500` | Largeur à 500px |
| `center` | Centre l'image |
| `bg` | Image en arrière-plan |
| `opacity:0.3` | Transparence |
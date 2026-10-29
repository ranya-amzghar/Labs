---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #ffffff;
    color: #24292f;
    font-family: 'Segoe UI', system-ui, sans-serif;
    padding: 48px 64px;
  }
  h1 {
    font-size: 2.2rem;
    color: #0969da;
    border-bottom: 2px solid #d0d7de;
    padding-bottom: 12px;
  }
  h2 {
    font-size: 1.6rem;
    color: #0969da;
    border-bottom: 1px solid #d0d7de;
    padding-bottom: 8px;
  }
  h3 {
    font-size: 1.2rem;
    color: #1a7f37;
  }
  pre, code {
    background-color: #f6f8fa;
    color: #24292f;
    border: 1px solid #d0d7de;
    border-radius: 6px;
    font-family: 'Fira Code', 'Consolas', monospace;
    font-size: 0.85rem;
  }
  blockquote {
    border-left: 4px solid #0969da;
    background: #f6f8fa;
    padding: 8px 16px;
    color: #57606a;
    margin: 16px 0;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.9rem;
  }
  th {
    background-color: #f6f8fa;
    color: #0969da;
    padding: 10px 14px;
    border: 1px solid #d0d7de;
    text-align: left;
  }
  td {
    padding: 8px 14px;
    border: 1px solid #d0d7de;
  }
  section.cover {
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-color: #0969da;
    color: #ffffff;
  }
  section.cover h1 {
    color: #ffffff;
    border-bottom: 2px solid rgba(255,255,255,0.3);
    font-size: 2.8rem;
  }
  section.cover p {
    color: rgba(255,255,255,0.85);
    font-size: 1.1rem;
  }
  section.plan {
    background-color: #f6f8fa;
  }
---
<!-- _class: cover -->

# Syntaxe Markdown

Structurer et mettre en forme un document

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

**Markdown** est un langage de balisage léger conçu pour être lisible à la fois en texte brut et une fois converti en HTML.

---

## 2. Problems Encountered

La rédaction de documents techniques sans outil de mise en forme présente plusieurs limites :

- **Lisibilité faible** — Le texte brut ne distingue pas les titres, le code, ou les éléments importants.
- **Portabilité limitée** — Les formats propriétaires (`.docx`, `.pages`) ne s'affichent pas directement dans un dépôt Git.
- **Collaboration difficile** — Pas de diff lisible pour les fichiers binaires.
- **Rendu incohérent** — Sans convention commune, chaque auteur formate différemment.

---

## 3. Solutions Implemented

Markdown répond à ces besoins avec une syntaxe simple et universelle :

- **Titres et structure** — `#`, `##`, `###` organisent le document hiérarchiquement.
- **Formatage inline** — `**gras**`, `*italique*`, `` `code` `` améliorent la lisibilité sans outil externe.
- **Listes et tableaux** — Permettent de présenter des données de façon claire.
- **Rendu natif sur GitHub** — Tout fichier `.md` est affiché automatiquement avec sa mise en forme.

---

## Titres et Formatage de Texte

```markdown
# Titre principal (H1)
## Section (H2)
### Sous-section (H3)

Texte en **gras**, en *italique*, et en ~~barré~~.


---

## Listes

```markdown
## Liste non ordonnée
- Élément A
- Élément B
  - Sous-élément B1

## Liste ordonnée
1. Cloner le dépôt
2. Créer le fichier README.md
3. Commiter les modifications
```

- Listes non ordonnées : `-`, `*`, ou `+`
- Sous-listes : indentation de **2 espaces**

---

## Liens et Images

```markdown
## Lien
[Visiter GitHub](https://github.com)

## Image
![Logo Markdown](https://markdown-here.com/img/icon256.png)

## Lien avec image
[![Markdown](https://img.shields.io/badge/Markdown-Docs-blue)](https://www.markdownguide.org)
```

| Syntaxe | Usage |
|:--------|:------|
| `[texte](url)` | Lien hypertexte |
| `![alt](url)` | Image intégrée |

---

## Tableaux

```markdown
| Syntaxe       | Rendu         | Alignement |
|:--------------|:-------------:|-----------:|
| `**gras**`    | **gras**      | Gauche     |
| `*italique*`  | *italique*    | Centre     |
| `~~barré~~`   | ~~barré~~     | Droite     |
```

- `:---` — alignement à gauche
- `:---:` — centré
- `---:` — alignement à droite

---

## Blocs de Code

````markdown
Code inline : `git status`

Bloc de code Bash :
```bash
git init
git add README.md
git commit -m "Initial commit"
git push origin main
```

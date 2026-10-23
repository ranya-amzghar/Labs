---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #ffffff;
    color: #1e293b;
    font-family: 'Segoe UI', system-ui, sans-serif;
    padding: 45px 65px;
    font-size: 24px;
  }
  h1 {
    color: #047857;
    font-size: 44px;
    margin-bottom: 16px;
  }
  h2 {
    color: #0d9488;
    font-size: 34px;
    border-bottom: 2px solid #e2e8f0;
    padding-bottom: 8px;
    margin-bottom: 18px;
  }
  p {
    color: #334155;
    font-size: 23px;
    line-height: 1.5;
    margin: 8px 0;
  }
  ul li, ol li {
    color: #1e293b;
    font-size: 23px;
    margin-bottom: 10px;
    line-height: 1.5;
  }
  strong {
    color: #047857;
  }
  pre {
    background-color: #f8fafc !important;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-size: 20px;
    padding: 12px 16px;
  }
  pre code {
    color: #0f172a !important;
    background: transparent !important;
    font-family: 'Consolas', monospace;
    font-size: 20px;
  }
  pre code span, pre code * {
    color: #0f172a !important;
  }
  section.code-slide pre {
    background-color: #f8fafc !important;
    border: 2px solid #0d9488 !important;
  }
  section.code-slide pre code,
  section.code-slide pre code * {
    color: #0f172a !important;
  }
  section.code-slide pre code .hljs-attr {
    color: #0369a1 !important;
  }
  section.code-slide pre code .hljs-string {
    color: #047857 !important;
  }
  blockquote {
    border-left: 4px solid #0d9488;
    background: #f0fdfa;
    padding: 10px 16px;
    color: #134e4a;
    font-size: 21px;
    margin: 14px 0;
    border-radius: 0 6px 6px 0;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 14px;
    font-size: 21px;
  }
  th {
    background-color: #0f766e;
    color: #ffffff;
    padding: 10px 14px;
    border: 1px solid #0d9488;
    text-align: left;
  }
  td {
    background-color: #f8fafc;
    color: #1e293b;
    padding: 9px 14px;
    border: 1px solid #e2e8f0;
  }
  section.cover {
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 50%, #ffffff 100%) !important;
  }
  section.cover h1 {
    color: #065f46 !important;
    font-size: 50px;
  }
  section.cover p {
    color: #334155 !important;
  }
  section.plan {
    background-color: #f8fafc !important;
  }
---
<!-- _class: cover -->
<!-- _paginate: false -->

# Les Agent Skills

Créer et structurer des compétences réutilisables pour agents IA

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

Un **Agent Skill** est un ensemble d'instructions spécialisées et de ressources qui enseigne à un agent IA comment réaliser une tâche précise à la demande.

- **Principe fondamental** : Chargé uniquement lorsque la tâche le requiert (*on-demand*), via un fichier standardisé `SKILL.md`.
- **Rôle clé** : Définir le périmètre, les contraintes, les flux de travail et les formats de sortie attendus.
- **Différence avec les règles générales** : Les règles s'appliquent en continu, tandis qu'un skill s'active contextuellement selon le besoin de l'utilisateur.

---

## 2. Problems Encountered

Guider un agent IA sans compétences formalisées pose des difficultés récurrentes :

- **Perte de contexte et hallucinations** : L'agent ignore les conventions spécifiques du projet et invente des formats disparates.
- **Surcharge du prompt initial (System Prompt)** : Définir toutes les règles dans le prompt de base sature la fenêtre de contexte et dégrade l'attention du modèle.
- **Répétition manuelle coûteuse** : L'utilisateur doit reformuler les mêmes directives complexes à chaque session.
- **Résultats non reproductibles** : Deux développeurs posant la même demande obtiennent des livrables incompatibles.

---

## 3. Solutions Implemented

Les Agent Skills résolvent ces problèmes grâce à une architecture modulaire et autonome :

- **Découverte sémantique automatique** : L'agent consulte le résumé des skills disponibles et ne lit que celui adapté à la requête active.
- **Structure standardisée (`SKILL.md`)** : Des métadonnées YAML en en-tête combinées à des instructions détaillées en Markdown.
- **Isolation des responsabilités** : Chaque skill traite un domaine unique (ex. créer une présentation Marp, analyser des logs, générer une veille).

---
<!-- _class: code-slide -->

## Anatomie d'un Fichier SKILL.md

Chaque compétence s'appuie sur une structure claire et universelle :

```yaml
---
name: marp-lab-presentation
description: Use when creating or formatting a lab into a Marp presentation.
---

# Instruction Name
## Overview
Objectif et priorités du workflow...

## Mandatory Structure
Architecture imposée étape par étape...

## Red Flags
Comportements et erreurs à proscrire formellement...
```

---

## Bonnes Pratiques de Conception

Pour qu'un skill soit exécuté avec précision par un agent IA :

- **Description de déclenchement explicite** : Préciser exactement quand l'utiliser (*When to use*) et quand ne pas l'utiliser (*Do NOT use*).
- **Consignes impératives et directes** : Privilégier les listes claires et ordonnées plutôt que de longs paragraphes.
- **Exemples concrets de sortie** : Fournir des snippets de code ou de Markdown montrant le résultat attendu.
- **Tableau des anti-patterns (Red Flags)** : Lister explicitement ce que l'agent ne doit jamais faire.

---

## Comparatif : Prompt vs Règle vs Skill

| Caractéristique | Prompt ponctuel | Règle globale | Agent Skill |
|:---|:---|:---|:---|
| **Portée** | Une seule interaction | Tout le projet en continu | Déclenché à la demande |
| **Coût en tokens** | Variable | Permanent | Optimisé (*On-demand*) |
| **Maintenance** | Nulle (jetable) | Fichier unique (`rules.md`) | Dossier modulaire réutilisable |
| **Usage idéal** | Question rapide | Style de code général | Tâche technique complexe |

---

## Tester et Améliorer un Skill

Un skill s'améliore par itérations successives selon le cycle suivant :

1. **Rédiger** : Spécifier la tâche, les déclencheurs et les contraintes.
2. **Tester** : Soumettre une requête utilisateur réelle à l'agent IA.
3. **Observer** : Vérifier si l'agent a activé le bon skill et respecté toutes les consignes.
4. **Corriger les écarts** : Ajouter des garde-fous dans la section *Red Flags* si l'agent a dérivé.
5. **Valider** : Rendre le skill permanent dans le dépôt pour toute l'équipe.

---

## Différences : Antigravity vs VS Code

| Critère | Antigravity | VS Code + GitHub Copilot |
|---|---|---|
| **Format** | `SKILL.md` | `SKILL.md` |
| **Emplacement projet** | `.agents/skills/` | `.github/skills/` ou `.agents/skills/` |
| **Emplacement global** | `~/.gemini/config/skills/` | `~/.copilot/skills/` |
| **Activation** | Automatique ou `/nom-skill` | Automatique ou `/nom-skill` |
| **Gestion** | Customizations | Agent Customizations |
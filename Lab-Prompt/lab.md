---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #111827;
    color: #f3f4f6;
    font-family: 'Segoe UI', sans-serif;
    padding: 48px 64px;
    font-size: 28px;
  }
  h1, h2 { color: #6ee7b7; }
  h1 { font-size: 52px; border-bottom: 2px solid #374151; padding-bottom: 10px; }
  h2 { font-size: 36px; border-bottom: 1px solid #374151; padding-bottom: 8px; margin-bottom: 16px; }
  strong { color: #93c5fd; }
  code { background: #1f2937; color: #fde68a; padding: 2px 8px; border-radius: 4px; font-size: 24px; }
  pre { background: #1f2937 !important; border-radius: 8px; font-size: 22px; }
  pre code { color: #ffffff !important; background: transparent !important; font-size: 22px; }
  pre code span, pre code * { color: #ffffff !important; }
  blockquote { border-left: 3px solid #6ee7b7; background: #1f2937; padding: 10px 16px; color: #d1fae5; font-size: 22px; }
  th { background: #065f46; color: #fff; padding: 10px 14px; font-size: 24px; }
  td { background: #1f2937; color: #f3f4f6; padding: 8px 14px; font-size: 24px; border: 1px solid #374151; }
  ul li, ol li { margin-bottom: 10px; line-height: 1.6; color: #f3f4f6; font-size: 26px; }
---

# Rédiger un Prompt Efficace pour une IA

**Réalisée par :** Ranya Amzghar
**Encadrée par :** Essarraj Fouad

---

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

Un **prompt** est l'instruction ou la question envoyée à un agent IA pour lui demander de réaliser une tâche.

- La qualité du prompt détermine directement la qualité de la réponse.
- Un bon prompt précise : le **contexte**, l'**objectif**, les **consignes** et le **résultat attendu**.
- Tester et affiner le prompt est une étape à part entière du processus.

---

## 2. Problems Encountered

Les interactions avec une IA échouent souvent à cause de prompts mal formulés :

- **Trop vague** — "Fais-moi un résumé" sans préciser le sujet, la longueur, ni le public cible.
- **Pas de contexte** — L'IA ne sait pas qui pose la question ni dans quel cadre.
- **Objectif ambigu** — L'IA interprète la demande différemment de ce qui était attendu.
- **Résultat non défini** — Aucune indication sur le format, la langue, ou le niveau de détail souhaité.

---

## 3. Solutions Implemented

Un prompt efficace repose sur une structure claire en quatre éléments :

- **Contexte** — Qui suis-je ? Quelle est la situation ?
- **Objectif** — Que dois-tu faire exactement ?
- **Consignes** — Contraintes à respecter (format, langue, longueur, style).
- **Résultat attendu** — À quoi doit ressembler la réponse ?

---

## Structure d'un Prompt Efficace

```
[Contexte]   Je suis étudiant en développement web.

[Objectif]   Explique-moi le concept de API REST.

[Consignes]  En français, en moins de 150 mots,
             avec un exemple concret.

[Résultat]   Une définition claire suivie d'un exemple
             sous forme de liste à puces.
```

> Plus le prompt est structuré, plus la réponse sera précise et exploitable.

---

## Avant / Après — Exemples de Prompts

| ❌ Prompt vague | ✅ Prompt structuré |
|:----------------|:--------------------|
| "Explique Git" | "Explique Git à un débutant en 5 points, en français, avec des exemples de commandes." |
| "Écris du code" | "Écris une fonction Python qui trie une liste par ordre décroissant, avec des commentaires." |
| "Résume ce texte" | "Résume ce texte en 3 phrases, en conservant les chiffres clés, pour un public non technique." |

---

## Tester et Améliorer un Prompt

**Cycle d'amélioration :**

1. Rédiger un premier prompt avec la structure de base.
2. Analyser la réponse — est-elle complète, précise, dans le bon format ?
3. Identifier ce qui manque ou ce qui est hors sujet.
4. Affiner le prompt : ajouter du contexte, reformuler l'objectif, préciser les consignes.
5. Tester à nouveau et comparer les résultats.

> Un bon prompt s'améliore par itération, comme du code.

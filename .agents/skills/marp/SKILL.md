---
name: marp
description: "Rédiger, structurer ou corriger des présentations Marp en Markdown, avec des diapositives lisibles et un frontmatter valide."
---

# Présentations Marp

Utiliser cette skill pour créer ou modifier un fichier de présentation Marp (`.md`).

## Structure

- Commencer par un frontmatter YAML valide avec `marp: true`, un thème, la pagination et le format `16:9`.
- Pour toute présentation de Lab, utiliser intégralement le style Marp fourni dans [assets/presentation-style.md](./assets/presentation-style.md) sans omettre ni remplacer ses règles.
- Ajouter les logos Solicode et OFPPT sur la page de garde de chaque présentation de Lab, si ces fichiers existent dans le workspace ou dans les ressources du Lab. Copier les images dans le dossier du Lab et les référencer localement avec les noms `logo_solicode.png` et `ofppt_logo.png`; ne pas utiliser de liens distants ni créer de faux logos.
- Séparer chaque diapositive par `---`.
- Pour un lab, suivre cet ordre :
  1. Titre du lab et identification de l'étudiant et de l'encadrant.
  2. Plan de présentation.
  3. Introduction et stack technique.
  4. Définitions des notions clés.
  5. Problème réel fourni par l'étudiant.
  6. Solution et démonstrations; ajouter des diapositives pratiques si nécessaire.
- Pour le plan d'un lab, utiliser les rubriques : Introduction & Stack Technique, Définitions, Problème, Solution.
- Ne pas ajouter de conclusion ou de remerciements; terminer par la solution ou le livrable.

## Exactitude et contenu

- Rédiger en français et adapter le contenu aux sources du lab.
- Ne pas inventer le problème ou la solution de l'étudiant. Lui demander ces informations avant de rédiger les diapositives correspondantes; à défaut, laisser des emplacements explicites à compléter.
- Ne pas ajouter de diapositives Quick Start ou Hello World, sauf si l'utilisateur les demande explicitement. Si elles sont demandées, vérifier que les commandes et exemples correspondent à l'environnement réel et déclarer le langage de chaque bloc de code.
- Expliquer clairement les termes techniques; ne pas présumer que le public les connaît.

## Lisibilité

- Maintenir une hiérarchie visuelle cohérente, un contraste suffisant et une quantité de texte adaptée à chaque diapositive.
- Alterner les diapositives sombres et claires lorsque le thème le permet; utiliser `<!-- _class: light -->` pour une diapositive claire.
- Déclarer le langage des blocs de code (`bash`, `php`, `html`, etc.) et aligner explicitement les colonnes des tableaux Markdown.

## Séparation du sujet et du contexte du projet

- Le titre, l'introduction et les définitions doivent rester centrés sur le sujet du Lab.
- Expliquer le sujet avant de parler de son application dans le projet technique.
- Ne pas consacrer l'introduction à la présentation du projet technique.
- Utiliser le projet uniquement pour contextualiser les exemples pratiques de la section 6.
- En section 4, présenter uniquement les définitions générales des notions, sans syntaxe, extraits de code ni exemples.
- En section 6, appliquer les notions dans des exemples inspirés du projet technique ; accompagner chaque exemple d'une seule phrase d'explication.
- Ne pas remplacer l'explication d'une notion par la présentation d'une classe ou d'une fonctionnalité du projet.
- Garder une distinction claire entre un exemple pédagogique et une fonctionnalité réellement développée.
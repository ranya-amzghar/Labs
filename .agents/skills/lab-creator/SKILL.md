---
name: lab-creator
description: "Créer ou adapter un Lab complet à partir de son README et d'un plan générique. À utiliser pour créer les fichiers pratiques, les exemples de code et la présentation d'un Lab."
---

# Création de lab

Cette skill orchestre la préparation de tous les livrables d'un Lab à partir de son README.

Pour la mise en forme de la présentation, appliquer aussi la skill `marp`. Pour créer une structure de fichiers ou une skill, appliquer la skill `skill-creator`.

## Règles

- Conserver à l'identique le titre et le slug existant du Lab, au format `lab-*`. Ne pas le remplacer par un titre reformulé.
- Lors de la création d'un nouveau Lab, utiliser un modèle README réutilisable. Choisir celui qui correspond au but et à la structure du Lab. Pour un Lab technique standard, partir du modèle [`assets/README-template.md`](./assets/README-template.md).
- Remplir le modèle avec les exigences et les informations réellement fournies pour le Lab. Remplacer les marqueurs par ces informations, conserver la structure du modèle et ne rien inventer.
- Adapter ou supprimer une section seulement si elle n'est pas pertinente pour le Lab, sans réorganiser le reste du modèle. Préserver les consignes spécifiques de la demande.
- Avant d'adapter le README d'un Lab existant, lire le fichier et préserver son contenu pertinent. Ne pas le remplacer à l'aveugle par le modèle.
- Garder dans le README les objectifs, notions, livrables et commandes d'exécution pertinents. Placer le plan de présentation uniquement dans `presentation.md`.
- Lire le README du Lab et le plan générique situé dans `assets/template-plan.md`.
- Utiliser `assets/template-plan.md` comme structure de référence obligatoire pour créer `presentation.md`.
- Utiliser intégralement le style Marp réutilisable de [la skill Marp](../marp/assets/presentation-style.md) pour chaque présentation de Lab.
- Rechercher les logos Solicode et OFPPT disponibles dans le workspace ou les ressources du Lab ; les copier dans le dossier du Lab et les intégrer localement à la page de garde sous les noms `logo_solicode.png` et `ofppt_logo.png`. Ne pas inventer ni charger de logos distants ; si les ressources ne sont pas disponibles, signaler la limitation.
- Préserver les six sections principales du plan générique, leur ordre et leur organisation. Adapter leur contenu aux objectifs, notions et réalisations réels du Lab.
- Ajouter des diapositives pratiques supplémentaires dans la section 6 si nécessaire pour présenter toutes les notions demandées.
- Dans la section des définitions, écrire uniquement les définitions générales, sans syntaxe, extraits de code ni exemples. Dans la section pratique, accompagner chaque exemple d'une seule phrase d'explication.
- Ne pas ajouter de diapositives Quick Start ou Hello World, sauf demande explicite de l'utilisateur.
- Ne pas dupliquer le plan de présentation dans le README.
- Rédiger les contenus du Lab et de la présentation en français. Adapter les explications au niveau et aux objectifs de l'étudiant.
- Ne jamais inventer le problème réel rencontré ni la solution choisie par l'étudiant. Avant de rédiger ces parties, lui demander :
  - « Quel problème concret rencontrez-vous ? »
  - « Quelle solution proposez-vous ? »
- Si ces informations manquent, laisser les parties concernées à compléter et continuer les autres tâches sans présenter des informations inventées comme des faits.
- Ne pas ajouter de diapositive de conclusion ou de remerciements.
- Ne pas exécuter de commande Git si l'utilisateur l'interdit.

## Important — Préservation du README

- Keep the existing `README.md` file in the Lab folder unchanged.
- Do not delete, rename, replace, overwrite or modify the original `README.md`.
- Read the original README and use it as the main source of requirements.
- Create a separate file named `README-generated.md` using `assets/README-template.md`.
- Fill the new README with the Lab's actual objectives, notions, requirements and expected deliverables.
- Respect the exact structure and section organization of `README-template.md`.
- Do not modify the original README or the README template.
- If `README-generated.md` already exists, preserve it and do not overwrite it without the user's permission.

## Livrables obligatoires

The agent must create all deliverables required by the Lab README, not only the presentation.

### 1. README.md

- Read the existing README before starting the Lab.
- Use it as the main reference for understanding the objectives, concepts, requirements and expected practical work.
- Preserve its existing content and structure.
- Do not delete, rename, replace or reorganize it.
- For a new Lab, create it using the appropriate README template.

### 2. Practical implementation

- Analyze all notions and requirements described in the README.
- Create the necessary source code files and folders.
- Implement the practical examples requested for each notion.
- Ensure the examples are related to the technical project when specified.
- Use clear, organized and understandable code.
- Add comments or explanations when they help the student understand the implementation.
- Provide the necessary instructions to execute and test the examples.
- Test the code when possible and correct detected errors.
- Do not create only explanations or a presentation when the README requires practical implementation.

### 3. presentation.md

- Read the generic presentation plan from `assets/template-plan.md`.
- Use its six main sections as the mandatory presentation structure:

  1. Titre du Lab et identification de l'étudiant et de l'encadrant.
  2. Plan de présentation.
  3. Introduction et stack technique.
  4. Définitions des notions clés.
  5. Problème réel fourni par l'étudiant.
  6. Solution et démonstrations.

- Preserve the order and organization of these six sections.
- Adapt the content to the actual objectives, concepts, technologies and practical implementation of the Lab.
- Add practical slides inside section 6 when necessary to demonstrate all requested notions.
- Apply the `marp` skill to format the presentation.
- Keep the presentation separate from the practical implementation.
- Do not add a conclusion or thank-you slide.

### 4. Verification

Before finishing, the agent must:

- Check that all required deliverables have been created.
- Verify that the existing README has been preserved.
- Verify that the practical implementation covers every notion requested in the README.
- Check that the presentation follows the six-section generic plan.
- Verify that the presentation and practical examples correspond to the actual Lab requirements.
- Test the code when possible.
- Report any errors, missing files or incomplete work honestly.
- Never claim that a task is complete if it has not been implemented or verified.

### Séparation entre le sujet du Lab et le projet technique

- Garder le **sujet du Lab comme sujet principal de toute la présentation**.
- Présenter d'abord la notion étudiée, ses objectifs, son importance et son fonctionnement général.
- Ne pas transformer l'introduction du Lab en présentation du projet technique.
- Utiliser le projet technique uniquement comme contexte d'application et comme source d'exemples pratiques.
- Ne présenter les entités du projet, ses fonctionnalités ou son architecture que lorsqu'elles sont nécessaires pour illustrer une notion.
- Dans la section 3, expliquer le lien entre le sujet du Lab et les technologies de la stack réellement concernées.
- Dans la section 4, expliquer les notions indépendamment du projet technique au moyen de définitions générales uniquement, sans exemples ni code.
- Dans la section 6, utiliser des exemples inspirés du projet technique pour appliquer les notions étudiées et expliquer chaque exemple en une seule phrase.
- Ne pas présenter un exemple pédagogique comme une fonctionnalité déjà implémentée dans le projet réel.

- The problem and solution sections must be directly related to the Lab's subject and learning objectives. Do not derive them automatically from the technical project's entities, architecture or features. The technical project should be used only as a practical context for demonstrations, unless the user explicitly provides a project-related problem.

## Final report

At the end of the task, provide a short report containing:

- The files created or updated.
- The practical work implemented.
- The tests performed and their results.
- Any remaining work or limitations.
- The skills actually used (`lab-creator`, `marp`, `skill-creator`, etc.), with a short explanation of their roles.
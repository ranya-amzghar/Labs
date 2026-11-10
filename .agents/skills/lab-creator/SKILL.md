---
name: lab-creator
description: "Créer ou adapter les livrables d'un lab à partir de son README et d'un plan générique. À utiliser pour préparer le contenu d'un lab et son plan de présentation."
---

# Création de lab

Cette skill orchestre la préparation des livrables d'un lab. Pour la mise en forme de la présentation, appliquer aussi la skill `marp`. Pour créer une structure de fichiers ou une skill, appliquer la skill `skill-creator`.

## Règles

- Conserver à l'identique le titre/slug existant du lab, au format `lab-*`. Ne pas le remplacer par un titre reformulé.
- Lors de la création d'un nouveau Lab, utiliser un modèle README réutilisable. Choisir celui qui correspond au but et à la structure du Lab; pour un Lab technique standard, partir du modèle [`assets/README-template.md`](./assets/README-template.md).
- Remplir le modèle avec les exigences et informations réellement fournies pour le Lab. Remplacer les marqueurs par ces informations, conserver la structure du modèle et ne rien inventer.
- Adapter ou supprimer une section seulement si elle n'est pas pertinente pour le Lab, sans réorganiser le reste du modèle. Préserver les consignes spécifiques de la demande.
- Avant d'adapter le README d'un Lab existant, lire le fichier et préserver son contenu pertinent; ne pas le remplacer à l'aveugle par le modèle.
- Garder dans le README les objectifs, notions, livrables et commandes d'exécution pertinents. Placer le plan de présentation uniquement dans `presentation.md`.
- Lire le README du lab et le plan générique disponible. Si un fichier `template-plan.md` est absent, rechercher le plan générique du workspace et l'utiliser sans prétendre qu'il porte un autre nom.
- Mettre le plan de présentation dans `presentation.md`. Ne pas dupliquer ni proposer ce plan dans le README.
- Rédiger en français et adapter les sections génériques aux objectifs et aux notions réellement présents dans le README.
- Ne jamais inventer le problème vécu ni la solution choisie par l'étudiant. Avant de rédiger ces sections, lui demander : « Quel problème concret rencontrez-vous ? » et « Quelle solution proposez-vous ? ». Si les réponses manquent, laisser ces contenus à compléter et ne pas les présenter comme des faits.
- Ne pas ajouter de diapositive de conclusion ou de remerciements.
- Ne pas exécuter de commande Git si l'utilisateur l'interdit.
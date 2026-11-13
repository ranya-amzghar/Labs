# Plan générique de présentation d'un Lab

Utiliser cette structure pour les présentations des Labs techniques, quel que soit le langage, le framework ou l'outil étudié. Rédiger en français, remplacer les indications entre crochets avec des informations vérifiées et conserver les six sections principales dans l'ordre. Une section peut nécessiter plusieurs diapositives.

Garder les diapositives synthétiques : privilégier des phrases courtes, des listes ou des tableaux et éviter les paragraphes. Placer l'arborescence détaillée du projet dans `README-generated.md`, pas dans une diapositive dédiée.

Pour la mise en forme, utiliser intégralement le style de [la skill Marp](../../marp/assets/presentation-style.md). Inclure les logos Solicode et OFPPT en local sur la page de garde lorsque les fichiers sont disponibles ; les placer dans le dossier du Lab et les référencer par des chemins relatifs.

## 1. Page de garde

- Titre du Lab.
- Sujet ou notions principales.
- Nom et prénom de l'étudiant.(Ranya Amzghar)
- Nom de l'encadrant.(Essarraj Fouad)
- Logos ou identité visuelle, uniquement si les ressources sont disponibles.
- Ajouter une brève phrase de présentation orale si cela convient au format.

## 2. Plan

Annoncer les parties de la présentation dans l'ordre :

1. Stack technique.
2. Définitions.
3. Problème et besoin.
4. Solution et pratique.
5. Résultats.

## 3. Stack technique

Présenter les technologies et outils réellement utilisés dans le Lab, par exemple dans un tableau comportant :

| Outil / Technologie | Rôle principal | Utilité dans le Lab |
|---|---|---|
| [Nom vérifié] | [Rôle] | [Utilité concrète] |

- Inclure seulement les éléments confirmés par le Lab et son environnement.
- Décrire brièvement comment ils servent à réaliser, exécuter ou vérifier les activités.
- Ne pas imposer de technologie ni forcer un lien avec le projet technique.

## 4. Définitions

- Présenter les notions principales du Lab, une par une.
- Donner à chaque notion un titre distinct et une définition simple.
- Expliquer le rôle de la notion et son fonctionnement de base.
- Garder cette section aux définitions : ne pas y inclure de syntaxe, de code ni d'exemples pratiques.
- Adapter le nombre de diapositives à la quantité de notions et préserver leur lisibilité.
- N'inclure que les notions pertinentes au sujet du Lab.

## 5. Problème et besoin

Présenter la situation réelle communiquée par l'étudiant en deux sous-parties :

Avant de rédiger ou de réécrire ces diapositives, demander à l'étudiant son problème réel et le besoin correspondant. Ne pas s'appuyer uniquement sur le contexte général du Lab pour les déduire.

### Problème

- Décrire le problème rencontré et ses manifestations concrètes.
- Expliquer son impact sur le projet technique, si cet impact a été fourni.

### Besoin

- Exprimer le besoin qui découle du problème fourni.
- Ne pas transformer une supposition en besoin réel.

N'inventer ni problème, ni impact, ni besoin. Si l'étudiant ne fournit pas ces informations après la demande, laisser un marqueur explicite, par exemple `[À compléter par l'étudiant]`.

## 6. Solution et pratique

- Présenter la solution proposée par l'étudiant. Si elle n'a pas été fournie, laisser `[Solution à compléter par l'étudiant]`.
- Décrire les étapes de mise en œuvre dans un ordre reproductible.
- Organiser les démonstrations par notion ou par étape. Répéter le motif ci-dessous autant que nécessaire pour couvrir les objectifs du Lab :
  1. Numéro et titre de la notion ou de l'étape.
  2. Une seule phrase expliquant le principe ou l'objectif de l'exemple.
  3. Syntaxe, commandes ou exemple pertinent, dans un bloc identifié par son langage lorsque applicable.
  4. Démonstration de l'utilisation, avec le résultat attendu ou observé.
  5. Lien avec le besoin fourni et utilité pour le projet, sans prétendre qu'un exemple autonome est déjà intégré.
- Vérifier que les exemples, commandes, prérequis et résultats correspondent aux livrables réels.
- Intégrer les démonstrations dans les diapositives pratiques correspondantes ; ne pas ajouter de diapositive autonome « Démonstration complète » sauf demande explicite.
- Ne pas ajouter de diapositives Quick Start ou Hello World, sauf demande explicite de l'utilisateur.
- Terminer cette section par une diapositive **Résultats** récapitulant les compétences ou objectifs effectivement couverts par les démonstrations.
- Ne pas ajouter de diapositive de conclusion ou de remerciements après les résultats.

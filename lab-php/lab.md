# Lab PHP — Approfondir les bases de PHP

## Objectif pratique

Mettre en pratique les trois notions du README — exceptions, namespaces et traits — dans une petite application de création d'article. Les exemples sont autonomes et illustrent des techniques applicables à un projet PHP organisé ; ils ne sont pas présentés comme une intégration au projet technique.

## Parcours

1. Exécuter `pratique/exceptions/exemple.php` et observer les cas valide et invalides.
2. Exécuter `pratique/namespaces/exemple.php` et repérer les classes importées avec `use`.
3. Exécuter `pratique/traits/exemple.php` et comparer les dates partagées par `Article` et `Section`.
4. Lire `pratique/application/tutoriel.md`, puis lancer l'application intégrée :

   ```bash
   php lab-php/pratique/application/index.php
   ```

## Structure de l'application intégrée

- `pratique/application/src/Models/` contient les modèles `Article` et `Section`.
- `pratique/application/src/Services/ArticleService.php` valide les données avant de créer un article.
- `pratique/application/src/Exceptions/ValidationException.php` représente une erreur de validation.
- `pratique/application/src/Traits/HasTimestamps.php` partage l'horodatage entre les deux modèles.
- `pratique/application/index.php` charge les fichiers et montre une création valide puis une validation rejetée.

Les classes sont chargées avec des `require_once` explicites pour garder la démonstration exécutable sans dépendance supplémentaire. Les tutoriels par notion et la présentation sont référencés dans le [README](./README.md).
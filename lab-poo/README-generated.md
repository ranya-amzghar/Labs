# Lab PHP — Approfondir la programmation orientée objet (POO)

## 1. Besoin du projet technique

Dans l'application d'actualités, il faut gérer plusieurs éléments, comme les journalistes, les sections et les articles. Sans une bonne organisation du code, les propriétés et les méthodes risquent d'être répétées dans plusieurs fichiers, ce qui rend le code difficile à maintenir et à faire évoluer.

La solution proposée est d'utiliser la programmation orientée objet pour organiser le code en classes.

Les notions à approfondir sont :

- les classes abstraites et les interfaces ;
- l'héritage et le polymorphisme ;
- l'encapsulation ;
- les méthodes et propriétés statiques.

## 2. Notions et techniques à apprendre

Dans ce lab, nous allons apprendre à :

- **Utiliser une classe abstraite :** `NewsItem` regroupe l'identifiant et le titre communs aux éléments d'actualité. Elle fournit des méthodes partagées et impose à ses sous-classes de définir leur type.
- **Définir une interface :** `Publishable` établit le contrat commun de titre et de publication pour les objets publiables.
- **Appliquer l'héritage :** `Article` et `Section` héritent de `NewsItem` pour réutiliser ses propriétés et méthodes.
- **Démontrer le polymorphisme :** la méthode `publish()` produit un résultat différent pour un journaliste, un article ou une section.
- **Encapsuler les données :** les propriétés sont privées ou protégées et sont consultées ou modifiées par des méthodes publiques contrôlées.
- **Utiliser des membres statiques :** `NewsItem::$createdCount` et `NewsItem::getCreatedCount()` suivent le nombre d'éléments créés au niveau de la classe.

L'objectif est de comprendre le rôle de ces notions et leur utilité avant de les appliquer à l'organisation des éléments d'une application d'actualités.

## 3. Réalisation attendue

Créer un exemple pratique en PHP qui modélise des journalistes, des sections et des articles avec une structure de fichiers claire.

L'exemple :

- utilise une classe abstraite comme base commune pour les articles et les sections ;
- définit une interface de publication et l'implémente dans les classes concernées ;
- réutilise les propriétés et méthodes communes par héritage ;
- démontre des résultats différents lors de l'appel à la même méthode `publish()` ;
- protège les données par l'encapsulation ;
- utilise une propriété et une méthode statiques pour compter les éléments d'actualité créés.

Pour chaque notion, le code et la démonstration sont présentés dans `src/` et `demo.php`. Le guide `GUIDE.md` explique le rôle des notions, leur usage dans l'exemple et leur intérêt pour l'application d'actualités.

**Améliorations :** des notions complémentaires peuvent être proposées, mais les six notions listées ci-dessus restent obligatoires.

## 4. Exécution des livrables

Prérequis :

- PHP 8.0 ou version ultérieure.

Depuis le dossier `lab-poo`, exécuter :

```bash
php demo.php
```

Le script affiche la publication d'un journaliste, d'une section et d'un article, puis le nombre d'éléments d'actualité créés. Les classes de l'exemple se trouvent dans `src/`. Les explications détaillées sont dans `GUIDE.md`, et le plan de présentation est séparé dans `presentation.md`.

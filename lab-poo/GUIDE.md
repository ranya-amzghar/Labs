# Guide pratique — POO pour une application d'actualités

L'exemple modélise des journalistes, des sections et des articles. Il s'agit d'une démonstration autonome des notions du lab, et non d'une fonctionnalité déjà intégrée à l'application d'actualités.

## Structure des fichiers

```text
lab-poo/
├── README.md
├── README-generated.md
├── GUIDE.md
├── presentation.md
├── demo.php
└── src/
    ├── Publishable.php
    ├── NewsItem.php
    ├── Journalist.php
    ├── Article.php
    └── Section.php
```

## Classe abstraite et héritage

`NewsItem` est une classe abstraite : elle fournit les éléments communs aux contenus d'actualité, notamment un identifiant et un titre. Elle ne peut pas être instanciée directement. `Article` et `Section` en héritent et définissent chacun leur type.

Dans une application d'actualités, cette base commune évite de répéter dans chaque classe la gestion de l'identifiant et du titre.

## Interface

`Publishable` définit deux méthodes requises pour un objet publiable : `getTitle()` et `publish()`. `NewsItem` et `Journalist` implémentent ce contrat, directement ou par héritage. Ainsi, le code client peut traiter uniformément plusieurs types d'objets publiables.

## Polymorphisme

`Article`, `Section` et `Journalist` ont chacun leur propre implémentation de `publish()`. Dans `demo.php`, ces objets sont placés dans un même tableau et la même méthode est appelée pour chacun. Le résultat varie selon la classe réelle de l'objet.

Ce mécanisme permet à une application d'utiliser une collection de contenus sans devoir connaître à l'avance chaque détail de leur publication.

## Encapsulation

Les identifiants, le nom du journaliste, le contenu de l'article et la liste des articles d'une section sont privés. Le titre commun est protégé pour les classes dérivées. Les méthodes publiques exposent les opérations prévues, par exemple obtenir le titre ou ajouter un article à une section, au lieu de permettre un accès direct non contrôlé aux données.

## Méthodes et propriétés statiques

La propriété statique `NewsItem::$createdCount` conserve un compteur commun à la classe. La méthode statique `NewsItem::getCreatedCount()` permet de le consulter sans créer un autre objet. Le compteur illustre une information partagée par toutes les instances de contenu.

## Démonstration

Depuis le dossier du lab :

```bash
php demo.php
```

Le script construit un journaliste, une section et un article, associe l'article à la section, puis appelle `publish()` sur chacun. Il affiche également le compteur statique.

# Lab : Architecture 3-tiers, DAO, Service et BaseService

## 1. Besoin du projet technique

Dans le projet technique, l'application PHP doit gérer plusieurs éléments, comme les sections, les articles et les journalistes.

Lorsque tout le code est écrit dans les mêmes fichiers, l'application devient difficile à organiser, à comprendre et à maintenir.

Il est donc nécessaire d'apprendre à séparer le code en plusieurs couches pour donner à chaque partie un rôle précis.

Ce Lab permet d'améliorer l'organisation du projet technique, de faciliter la maintenance du code et d'éviter la répétition des traitements.

Les notions à approfondir sont :

- l'architecture 3-tiers ;
- le DAO (Data Access Object) ;
- le Service ;
- le BaseService.

La séparation de ces couches permet de mieux structurer le code, de clarifier les responsabilités et de faciliter l'ajout de nouvelles fonctionnalités sans dupliquer les traitements.

## 2. Notions et techniques à apprendre

Dans ce lab, nous allons apprendre à :

- **Architecture 3-tiers :** séparer la présentation, la logique métier et l'accès aux données pour structurer proprement l'application.
- **DAO (Data Access Object) :** regrouper les requêtes et les opérations de lecture/écriture sur la base dans des classes dédiées.
- **Service :** centraliser les traitements métier, les validations et les règles applicatives.
- **BaseService :** créer une classe commune contenant les méthodes partagées entre plusieurs services afin d'éviter la duplication.

L'objectif est de comprendre le rôle de chaque couche et d'appliquer cette organisation à un exemple simple et fonctionnel basé sur le projet technique.

## 3. Réalisation attendue

Créer un exemple pratique en PHP basé sur le projet technique (News Application) afin d'illustrer l'architecture 3-tiers, le DAO, le Service et le BaseService.

L'exemple doit :

- séparer les classes selon leurs responsabilités ;
- définir un DAO dédié à l'accès aux données des sections ;
- utiliser un Service pour gérer les règles métier et la logique de traitement ;
- partager les méthodes communes via un BaseService ;
- permettre la récupération et l'ajout d'une section dans un exemple simple.

Le code doit être simple, fonctionnel et adapté à un niveau débutant.

La structure de dossiers du projet est la suivante :

```php
src/
├── Config/
│   └── Database.php
├── DAO/
│   └── SectionDAO.php
├── Models/
│   └── Section.php
├── Services/
│   ├── BaseService.php
│   └── SectionService.php
├── bootstrap.php
└── demo.php
```

Pour chaque fichier, il faut expliquer son rôle dans la communication entre les différentes couches. L'objectif est de montrer comment les données passent de la base vers le DAO, puis vers le service, avant d'être affichées ou exploitées dans le code applicatif.

**Améliorations :** des méthodes supplémentaires peuvent être ajoutées pour les articles ou les journalistes, mais l'architecture de base et la logique de section restent les éléments obligatoires.

## 4. Exécution des livrables

Prérequis :

- PHP 8.0 ou version ultérieure.

Depuis le dossier `lab-architecture`, exécuter :

```bash
php demo.php
```

Le script affiche les sections existantes et ajoute une nouvelle section pour démontrer le rôle du DAO, du Service et du BaseService. Les classes sont réparties dans `src/`, l'architecture est expliquée dans `GUIDE.md` et le plan de présentation est séparé dans `presentation.md`.

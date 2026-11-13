# Guide de l'architecture 3-tiers, DAO, Service et BaseService

## 1. Vue d'ensemble

L'application est découpée en couches distinctes :

- la couche `Models` contient les objets métier ;
- la couche `DAO` gère les accès aux données ;
- la couche `Services` contient la logique métier ;
- la couche `Config` centralise la connexion à la base de données.

Cette séparation évite de mélanger les responsabilités dans un même fichier et rend le code plus facile à maintenir.

## 2. Les fichiers principaux

### `src/Models/Section.php`

Cette classe représente une section de l'application d'actualités. Elle ne fait pas de requête SQL ; elle contient uniquement les données et les méthodes simples pour les lire ou les modifier.

### `src/DAO/SectionDAO.php`

Le DAO est responsable de la lecture et de l'écriture des sections dans la base de données. Il encapsule les requêtes SQL et retourne des objets `Section`.

### `src/Services/BaseService.php`

Cette classe sert de base commune à plusieurs services. Elle contient les méthodes utilitaires telles que la validation des champs et le nettoyage de texte.

### `src/Services/SectionService.php`

Le service applique les règles métier avant de demander au DAO d'enregistrer ou de récupérer des données. Il fait le lien entre l'utilisateur ou le contrôleur et la persistance.

### `src/Config/Database.php`

Cette classe initialise la connexion à la base SQLite et crée la table `sections` si elle n'existe pas.

### `demo.php`

Le script de démonstration instancie le service, affiche les sections existantes puis en crée une nouvelle. Cela permet de vérifier que l'architecture fonctionne bien comme un ensemble cohérent.

## 3. Exemple de flux

1. Le code de démonstration appelle `SectionService`.
2. Le service valide les données de la section.
3. Le service transmet les données au `SectionDAO`.
4. Le DAO exécute la requête SQL dans SQLite.
5. La base renvoie les résultats, qui sont convertis en objets `Section`.

Ce cycle montre clairement la séparation entre les couches : le service ne connaît pas les détails SQL, et le DAO ne contient pas la logique métier.

## 4. Pourquoi cette architecture est utile ?

- elle réduit la duplication de code ;
- elle facilite la maintenance et les évolutions ;
- elle rend le code plus lisible pour un niveau débutant ;
- elle sépare clairement les responsabilités de chaque fichier.

## 5. Utilisation dans le projet technique

Dans une application réelle, on peut appliquer le même principe à d'autres éléments comme les articles et les journalistes. Chaque entité aura son modèle, son DAO et son service, tandis qu'une base commune pourra regrouper les validations et les méthodes réutilisables.
